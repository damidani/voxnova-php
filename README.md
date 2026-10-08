# voxnova/sdk (PHP)

SDK PHP de la plateforme développeurs VoxNova (PHP 8.1+, extensions curl et json, sans autre dépendance).

```bash
composer require voxnova/sdk
```

- `VoxNova\Client` : API REST v1 (applications, endpoints SIP, numéros, appels, enregistrements, journal).
- `VoxNova\VoiceResponse` : instructions renvoyées par votre webhook (dial plan en code).
- `VoxNova\Webhook` : vérification de l'en-tête `X-VoxNova-Signature`.

## API REST

```php
use VoxNova\Client;
use VoxNova\VoxNovaException;

$vx = new Client(getenv('VX_KEY'), 'https://voip.exemple.fr');

$app = $vx->applications->create(['name' => 'SVI', 'voiceUrl' => 'https://exemple.fr/voice']);
$ep  = $vx->endpoints->create(['name' => 'Accueil', 'number' => '1000']);
echo $ep['sip']['server'], ' ', $ep['sip']['username'], ' ', $ep['sip']['password'];

$first = $vx->numbers->available('331')[0];
$vx->numbers->buy($first['number'], $app['id']);

$call = $vx->calls->create(['to' => '0612345678', 'applicationId' => $app['id'], 'vars' => ['commande' => 'A-42']]);

try {
    $vx->endpoints->create(['name' => 'Doublon', 'number' => '1000']);
} catch (VoxNovaException $e) {
    echo $e->status, ' ', $e->getMessage(); // 409 Le numéro interne 1000 est déjà utilisé
}
```

## Webhook (dial plan en code)

```php
use VoxNova\VoiceResponse;
use VoxNova\Webhook;

$call = Webhook::request(getenv('VX_SECRET')); // vérifie la signature (401 sinon) et décode le JSON

(new VoiceResponse())
    ->play('https://exemple.fr/accueil.mp3')
    ->gather(['numDigits' => 1, 'timeout' => 6, 'action' => 'https://exemple.fr/menu'])
    ->send();
```

Exemple complet (menu, transfert, messagerie, enregistrement, appels émis par les endpoints) : `examples/webhook.php`.

Instructions : `answer`, `play`, `say`, `pause`, `set`, `gather`, `record`, `dial`, `redirect`, `queue`, `conference`, `voicemail`, `transfer`, `hangup`. Documentation complète : chapitre 19 « Plateforme développeurs » et `GET /api/v1/openapi.json`.

## Tests

```bash
php tests/run.php                                              # tests unitaires
VX_API_URL=https://voip.exemple.fr VX_KEY=vxk_… php tests/run.php   # + intégration avec votre compte
```
