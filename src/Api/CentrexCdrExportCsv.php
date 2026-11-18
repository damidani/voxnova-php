<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexCdrExportCsv
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Export CSV du journal des appels.
     * Droits : Administrateur.
     * GET /api/centrex/cdr/export.csv
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/cdr/export.csv', null, $query);
    }
}
