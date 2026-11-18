<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class IntegrationsWhmcsPing
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Module WHMCS : test de connexion.
     * Droits : Administrateur.
     * GET /api/integrations/whmcs/ping
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/integrations/whmcs/ping', null, $query);
    }
}
