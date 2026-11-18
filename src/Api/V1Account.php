<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Account
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Compte, limites et utilisation
     * GET /api/v1/account
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/account', null, $query);
    }
}
