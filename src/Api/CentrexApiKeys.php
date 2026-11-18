<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexApiKeys
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Clés d’API.
     * Droits : Administrateur.
     * GET /api/centrex/api-keys
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/api-keys', null, $query);
    }

    /**
     * Crée une clé d’API.
     * Droits : Administrateur.
     * POST /api/centrex/api-keys
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/api-keys', $body, $query);
    }

    /**
     * Supprime une clé d’API.
     * Droits : Administrateur.
     * DELETE /api/centrex/api-keys/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/api-keys/' . rawurlencode($id), null, $query);
    }
}
