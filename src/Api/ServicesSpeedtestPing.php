<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ServicesSpeedtestPing
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Test de latence.
     * Droits : Administrateur.
     * GET /api/services/speedtest/ping
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/services/speedtest/ping', null, $query);
    }
}
