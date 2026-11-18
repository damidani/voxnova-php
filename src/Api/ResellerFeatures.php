<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerFeatures
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Fonctions proposées à vos clients.
     * Droits : Revendeur.
     * GET /api/reseller/features
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/features', null, $query);
    }

    /**
     * Masque ou propose des fonctions à tous vos clients.
     * Droits : Revendeur.
     * PUT /api/reseller/features
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/reseller/features', $body, $query);
    }
}
