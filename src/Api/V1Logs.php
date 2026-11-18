<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Logs
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Journal des requêtes webhook (7 jours)
     * GET /api/v1/logs
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/logs', null, $query);
    }
}
