<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Calls
{
    public readonly V1CallsLive $live;

    public function __construct(private Client $client)
    {
        $this->live = new V1CallsLive($client);
    }

    /**
     * Appels en cours
     * GET /api/v1/calls
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/calls', null, $query);
    }

    /**
     * Passer un appel programmable
     * POST /api/v1/calls
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/calls', $body, $query);
    }

    /**
     * État d’un appel (en cours ou terminé)
     * GET /api/v1/calls/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/calls/' . rawurlencode($id), null, $query);
    }

    /**
     * Raccrocher
     * POST /api/v1/calls/:id/hangup
     */
    public function hangup(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/calls/' . rawurlencode($id) . '/hangup', $body, $query);
    }

    /**
     * Reprendre la main (nouvelles instructions)
     * POST /api/v1/calls/:id/redirect
     */
    public function redirect(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/calls/' . rawurlencode($id) . '/redirect', $body, $query);
    }
}
