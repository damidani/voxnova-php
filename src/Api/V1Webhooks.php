<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Webhooks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Webhooks de l’entreprise
     * GET /api/v1/webhooks
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/webhooks', null, $query);
    }

    /**
     * Créer un webhook (le secret de signature est renvoyé une fois)
     * POST /api/v1/webhooks
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/webhooks', $body, $query);
    }

    /**
     * Modifier
     * PATCH /api/v1/webhooks/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/v1/webhooks/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprimer
     * DELETE /api/v1/webhooks/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/v1/webhooks/' . rawurlencode($id), null, $query);
    }
}
