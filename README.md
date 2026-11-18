# voxnova/sdk (PHP)

SDK PHP de la plateforme développeurs VoxNova (PHP 8.1+, extensions curl et json, sans autre dépendance).

```bash
composer require voxnova/sdk
```

- `VoxNova\Client` : API REST (clé d'entreprise `vxk_…` ou clé revendeur `vxr_…`) : **SMS** (envoi, suivi de remise, crédits), webhooks, applications, endpoints SIP, numéros, appels, enregistrements, journal, **scénarios d'appel** (`flows`), utilisateurs, postes, files d'attente, groupes d'appel, serveurs vocaux, accès brut au panneau (`panel`) et **espace revendeur** (`reseller`, `forOrganization()`).
- `VoxNova\VoiceResponse` : instructions renvoyées par votre webhook (dial plan en code).
- `VoxNova\Webhook` : vérification des rappels des applications vocales (`verifySignature`) et des webhooks d'entreprise ou de revendeur (`verifyEvent` : `sms.status`, `call.completed`).

## SMS, webhooks, revendeur

```php
// SMS : envoi, suivi de remise, crédits
$sms = $vx->sms->send(['to' => '0612345678', 'text' => 'Votre code : 1234', 'tag' => 'otp', 'sender' => 'hCloud']);
$etat = $vx->sms->get($sms['id']);          // status : queued → sent → delivered ; events[]
['balance' => $solde, 'monthlyLeft' => $reste] = $vx->sms->balance();

// Revendeur : agir au nom d'un client (clé vxr_…)
$reseller = new Client(getenv('VXR_KEY'), 'https://api.exemple.fr');
$client = $reseller->forOrganization('<id du client>');
$client->extensions->create(['number' => '1001', 'displayName' => 'Accueil']);
$client->flows->update($flowId, ['name' => 'Standard', 'graph' => $graph]);
$reseller->reseller->applySmsPack('<id du client>', '<id du pack>');

// Webhook sms.status (signature sha256 sur le corps brut)
$raw = file_get_contents('php://input');
if (!Webhook::verifyEvent(getenv('WH_SECRET'), $raw, $_SERVER['HTTP_X_VOXNOVA_SIGNATURE'] ?? null)) { http_response_code(401); exit; }
$event = json_decode($raw, true);           // ['event' => 'sms.status', 'data' => ['status' => 'delivered', …]]
```

Documentation interactive : `/api/v1/docs` (Swagger) ; guide : chapitres 19 et 30.

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

## Toute l’API : `$vx->api`

Les **524 routes** de l’API (panneau client, espace revendeur, plateforme développeurs) sont disponibles et documentées, rangées comme leurs chemins. Elles sont générées depuis la spécification : tout ce que l’API sait faire est dans le SDK.

```php
$client = (new VoxNova\Client($cleRevendeur, 'https://api.exemple.fr'))->forOrganization($idClient);
$users = $client->api->org->users->list();                       // GET /api/org/users
$client->api->org->users->update($id, ['name' => 'Julie']);      // PATCH /api/org/users/:id
$client->api->centrex->cdr->list(['page' => 2]);                  // GET /api/centrex/cdr?page=2
$client->api->centrex->flows->simulate(['graph' => $graph]);      // POST /api/centrex/flows/simulate

// par identifiant et catalogue des opérations (méthode, chemin, résumé, rubrique, schéma du corps)
$client->call('org.extensions.get', ['id' => $id]);
$ops = VoxNova\Client::operations();
```

Règle : `GET` d’une liste → `list`, d’un élément → `get`, `POST` → `create` (ou le nom de l’action : `invite`, `simulate`…), `PUT`/`PATCH` → `update`, `DELETE` → `delete`. Arguments : paramètres du chemin, puis le corps (`array`), puis les filtres (`array`).

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
