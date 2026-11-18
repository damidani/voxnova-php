<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgTroubleshootTargets
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Cibles possibles pour l’appel de test.
     * Droits : Administrateur.
     * GET /api/org/troubleshoot/targets
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/troubleshoot/targets', null, $query);
    }
}
