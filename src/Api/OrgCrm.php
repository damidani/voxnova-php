<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgCrm
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Réglages de la fiche CRM à la prise d’appel : mode (off, open : le softphone ouvre la fiche, request : requête de la plateforme, both), modèle de la fiche, adresse et méthode de la requête, secret de signature présent ou non.
     * Droits : Administrateur.
     * GET /api/org/crm
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/crm', null, $query);
    }

    /**
     * Enregistre la fiche CRM. Modèles avec variables encodées automatiquement : {{caller}}, {{did}}, {{var.<nom>}} (variables du scénario : code tapé, client identifié, réponse d’une requête…). Adresses http(s) uniquement. Un secret de signature est créé au premier enregistrement.
     * Droits : Administrateur.
     * PUT /api/org/crm
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/crm', $body, $query);
    }

    /**
     * Nouveau secret de signature des requêtes (vxc_…), affiché une seule fois. Vérifiez X-VoxNova-Signature: sha256=<HMAC-SHA256 du corps>.
     * Droits : Administrateur.
     * POST /api/org/crm/secret
     */
    public function secret(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/crm/secret', $body, $query);
    }

    /**
     * Envoie une requête d’essai (variables d’exemple, champ test: true) et renvoie le statut obtenu.
     * Droits : Administrateur.
     * POST /api/org/crm/test
     */
    public function test(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/crm/test', $body, $query);
    }
}
