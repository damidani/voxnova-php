<?php

declare(strict_types=1);

/**
 * Tests du SDK PHP (sans dépendance) : php tests/run.php
 * Intégration avec une vraie plateforme si VX_API_URL et VX_KEY sont définis.
 */

spl_autoload_register(static function (string $class): void {
    $file = __DIR__ . '/../src/' . str_replace(['VoxNova\\', '\\'], ['', '/'], $class) . '.php';
    if (is_file($file)) {
        require $file;
    }
});

use VoxNova\Client;
use VoxNova\VoiceResponse;
use VoxNova\VoxNovaException;
use VoxNova\Webhook;

$failures = 0;
function ok(bool $c, string $m): void
{
    global $failures;
    echo ($c ? '  ✔ ' : '  ✘ ') . $m . PHP_EOL;
    if (!$c) {
        $failures++;
    }
}

echo "Instructions vocales\n";
$r = (new VoiceResponse())
    ->answer()
    ->play('https://exemple.fr/a.mp3', 2)
    ->play(['sound' => 'ivr/ivr-welcome.wav'])
    ->say(42)
    ->say('123', 'digits', 'en')
    ->pause(2)
    ->set(['client' => 'A-42', 'vip' => true])
    ->dial([['endpoint' => '1000'], ['number' => '0612345678']], ['timeout' => 25, 'strategy' => 'sequential', 'action' => 'https://exemple.fr/fin'])
    ->dial(['endpoint' => '1001'])
    ->gather(['numDigits' => 1, 'timeout' => 6, 'action' => 'https://exemple.fr/menu'])
    ->record(['maxSeconds' => 60, 'beep' => false])
    ->redirect('https://exemple.fr/x')
    ->queue('500')
    ->conference('salle', ['muted' => true])
    ->voicemail('1000')
    ->transfer('200')
    ->hangup()
    ->hangup('CALL_REJECTED');
// sortie de référence du SDK TypeScript pour la même suite d'instructions
$expected = '[{"verb":"answer"},{"verb":"play","url":"https://exemple.fr/a.mp3","loop":2},{"verb":"play","sound":"ivr/ivr-welcome.wav"},{"verb":"say","value":"42"},{"verb":"say","value":"123","as":"digits","language":"en"},{"verb":"pause","seconds":2},{"verb":"set","vars":{"client":"A-42","vip":true}},{"verb":"dial","targets":[{"endpoint":"1000"},{"number":"0612345678"}],"timeout":25,"strategy":"sequential","action":"https://exemple.fr/fin"},{"verb":"dial","endpoint":"1001"},{"verb":"gather","numDigits":1,"timeout":6,"action":"https://exemple.fr/menu"},{"verb":"record","maxSeconds":60,"beep":false},{"verb":"redirect","url":"https://exemple.fr/x"},{"verb":"queue","queue":"500"},{"verb":"conference","name":"salle","muted":true},{"verb":"voicemail","endpoint":"1000"},{"verb":"transfer","to":"200"},{"verb":"hangup"},{"verb":"hangup","cause":"CALL_REJECTED"}]';
ok($r->toJson() === $expected, 'JSON identique au SDK TypeScript (' . count($r->toArray()) . ' instructions)');
ok(json_encode($r, JSON_UNESCAPED_SLASHES) === $expected, 'json_encode($response) donne la même liste');

echo "Signature des webhooks\n";
$body = '{"event":"call.incoming","callId":"x"}';
$t = time();
$header = "t=$t,v1=" . hash_hmac('sha256', "$t.$body", 'vxs_secret');
ok(Webhook::verifySignature('vxs_secret', $body, $header), 'signature valide acceptée');
ok(!Webhook::verifySignature('autre', $body, $header), 'mauvaise clé refusée');
ok(!Webhook::verifySignature('vxs_secret', $body . ' ', $header), 'corps modifié refusé');
$old = $t - 3600;
ok(!Webhook::verifySignature('vxs_secret', $body, "t=$old,v1=" . hash_hmac('sha256', "$old.$body", 'vxs_secret')), 'requête trop ancienne refusée (rejeu)');
ok(!Webhook::verifySignature('vxs_secret', $body, null) && !Webhook::verifySignature('vxs_secret', $body, 'n importe quoi'), 'en-tête absent ou invalide refusé');
// signature produite par la plateforme elle-même (VX_SIGNED = "<en-tête>\n<corps>")
if ($signed = getenv('VX_SIGNED')) {
    [$h, $b] = explode("\n", $signed, 2);
    ok(Webhook::verifySignature((string) getenv('VX_SIGNED_SECRET'), $b, $h), 'signature produite par la plateforme acceptée');
}

echo "Webhooks d'entreprise et de revendeur\n";
$evBody = '{"event":"sms.status","data":{"status":"delivered"}}';
$evSig = 'sha256=' . hash_hmac('sha256', $evBody, 'whsec');
ok(Webhook::verifyEvent('whsec', $evBody, $evSig), 'signature sha256 valide acceptée');
ok(!Webhook::verifyEvent('autre', $evBody, $evSig) && !Webhook::verifyEvent('whsec', $evBody . ' ', $evSig) && !Webhook::verifyEvent('whsec', $evBody, null), 'signature fausse refusée');

echo "Client\n";
try {
    new Client('mauvaise', 'https://x');
    ok(false, 'clé invalide refusée');
} catch (InvalidArgumentException) {
    ok(true, 'clé sans préfixe vxk_ / vxr_ refusée');
}
ok((new Client('vxr_abc', 'https://x'))->forOrganization('org_1') instanceof Client, 'clé revendeur et forOrganization acceptées');

echo "Requêtes (serveur local)\n";
$tmp = sys_get_temp_dir() . '/vx-sdk-' . getmypid() . '.log';
$router = sys_get_temp_dir() . '/vx-router-' . getmypid() . '.php';
file_put_contents($router, '<?php file_put_contents(' . var_export($tmp, true) . ', json_encode([\'m\' => $_SERVER[\'REQUEST_METHOD\'], \'u\' => $_SERVER[\'REQUEST_URI\'], \'org\' => $_SERVER[\'HTTP_X_ORGANIZATION\'] ?? null, \'auth\' => $_SERVER[\'HTTP_AUTHORIZATION\'] ?? null, \'b\' => file_get_contents(\'php://input\')]) . "\\n", FILE_APPEND); header(\'Content-Type: application/json\'); echo json_encode([\'ok\' => true]);');
$port = 18900 + getmypid() % 500;
$proc = proc_open([PHP_BINARY, '-S', "127.0.0.1:$port", $router], [['pipe', 'r'], ['pipe', 'w'], ['pipe', 'w']], $pipes);
usleep(600000);
$calls = static function () use ($tmp): array {
    return array_map(static fn ($l) => json_decode($l, true), array_filter(explode("\n", (string) @file_get_contents($tmp))));
};
$vxl = new Client('vxk_local', "http://127.0.0.1:$port");
$vxl->sms->send(['to' => '0612345678', 'text' => 'Bonjour', 'tag' => 'bienvenue']);
$c = $calls();
$last = end($c);
ok($last['m'] === 'POST' && $last['u'] === '/api/v1/sms' && json_decode($last['b'], true)['tag'] === 'bienvenue' && $last['org'] === null, 'sms->send : POST /api/v1/sms avec les champs');
$vxl->sms->list('delivered', null, 'bienvenue');
$c = $calls();
ok(str_contains(end($c)['u'], 'status=delivered') && str_contains(end($c)['u'], 'tag=bienvenue'), 'sms->list : filtres');
$vxr = (new Client('vxr_local', "http://127.0.0.1:$port"))->forOrganization('org_1');
$vxr->flows->update('f1', ['name' => 'Accueil', 'graph' => ['nodes' => [], 'edges' => []]]);
$c = $calls();
ok(end($c)['m'] === 'PUT' && end($c)['u'] === '/api/centrex/flows/f1' && end($c)['org'] === 'org_1', 'flows->update : PUT avec X-Organization');
$vxr->users->update('u1', ['name' => 'Nouveau']);
$c = $calls();
ok(end($c)['m'] === 'PATCH', 'users->update : PATCH');
$vxr->reseller->applySmsPack('org_1', 'pack_1');
$c = $calls();
ok(end($c)['u'] === '/api/reseller/clients/org_1/sms/pack' && json_decode(end($c)['b'], true) === ['packId' => 'pack_1'], 'reseller->applySmsPack');
$vxl->porting->create(['numbers' => ['0123456789'], 'holderName' => 'Société', 'contactName' => 'Jean', 'contactEmail' => 'j@exemple.fr']);
$c = $calls();
ok(end($c)['m'] === 'POST' && end($c)['u'] === '/api/v1/porting', 'porting->create');
$vxl->porting->cancel('p1');
$c = $calls();
ok(end($c)['u'] === '/api/v1/porting/p1/cancel', 'porting->cancel');
proc_terminate($proc);
@unlink($tmp);
@unlink($router);

$url = getenv('VX_API_URL');
$key = getenv('VX_KEY');
if ($url && $key) {
    echo "Intégration ($url)\n";
    $vx = new Client($key, $url);
    $acc = $vx->account->get();
    ok(isset($acc['limits']['endpoints']), "compte « {$acc['name']} » : {$acc['limits']['endpoints']} endpoints autorisés");
    $app = $vx->applications->create(['name' => 'App PHP', 'voiceUrl' => 'https://exemple.fr/voice']);
    ok(str_starts_with($app['signingSecret'], 'vxs_'), 'application créée');
    $app = $vx->applications->update($app['id'], ['statusCallbackUrl' => 'https://exemple.fr/status']);
    ok($app['statusCallbackUrl'] === 'https://exemple.fr/status', 'application modifiée');
    $ep = $vx->endpoints->create(['name' => 'Poste PHP', 'number' => '3000', 'applicationId' => $app['id']]);
    ok($ep['number'] === '3000' && strlen($ep['sip']['password']) >= 20 && $ep['applicationId'] === $app['id'], "endpoint 3000 : {$ep['sip']['username']}@{$ep['sip']['domain']}");
    $ep2 = $vx->endpoints->resetPassword('3000');
    ok($ep2['sip']['password'] !== $ep['sip']['password'], 'nouveau mot de passe SIP');
    ok(count(array_filter($vx->endpoints->list(), static fn ($e) => $e['number'] === '3000')) === 1, 'endpoint listé');
    try {
        $vx->endpoints->create(['name' => 'Doublon', 'number' => '3000']);
        ok(false, 'doublon refusé');
    } catch (VoxNovaException $e) {
        ok($e->status === 409, "erreur de l'API : VoxNovaException {$e->status} « {$e->getMessage()} »");
    }
    ok(is_array($vx->numbers->available()) && is_array($vx->numbers->list()), 'numéros : stock et liste');
    ok(isset($vx->calls->live()['calls']), 'appels en cours');
    ok(isset($vx->logs->list(null, null, true)['items']) && isset($vx->cdr->list()['items']) && isset($vx->recordings->list()['items']), 'journaux');
    $vx->endpoints->delete($ep['id']);
    $vx->applications->delete($app['id']);
    ok(!array_filter($vx->applications->list(), static fn ($a) => $a['id'] === $app['id']), 'nettoyage');
}

echo $failures ? "\n$failures échec(s)\n" : "\nSDK PHP validé ✔\n";
exit($failures ? 1 : 0);
