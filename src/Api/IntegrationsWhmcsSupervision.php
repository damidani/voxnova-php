<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class IntegrationsWhmcsSupervision
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Supervision : files d'attente (appelants en attente, agents), appels en cours sur les postes.
     * Droits : Administrateur.
     * GET /api/integrations/whmcs/supervision
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/integrations/whmcs/supervision', null, $query);
    }
}
