<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class IntegrationsWhmcsLive
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Module WHMCS : appels en cours par poste (fiche client à l’appel).
     * Droits : Administrateur.
     * GET /api/integrations/whmcs/live
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/integrations/whmcs/live', null, $query);
    }
}
