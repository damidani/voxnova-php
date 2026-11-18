<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CallsStats
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Statistiques de ses appels (volumes, durées, appels manqués).
     * Droits : Utilisateur.
     * GET /api/calls/stats
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/calls/stats', null, $query);
    }
}
