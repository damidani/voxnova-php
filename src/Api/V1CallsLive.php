<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1CallsLive
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Appels en cours (détail par canal)
     * GET /api/v1/calls/live
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/calls/live', null, $query);
    }
}
