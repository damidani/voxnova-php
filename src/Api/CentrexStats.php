<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexStats
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Statistiques du standard (appels, durées, postes les plus actifs).
     * Droits : Administrateur.
     * GET /api/centrex/stats
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/stats', null, $query);
    }
}
