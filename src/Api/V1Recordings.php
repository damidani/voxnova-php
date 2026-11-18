<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Recordings
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Enregistrements (instruction record)
     * GET /api/v1/recordings
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/recordings', null, $query);
    }

    /**
     * Supprimer
     * DELETE /api/v1/recordings/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/v1/recordings/' . rawurlencode($id), null, $query);
    }

    /**
     * Lien d’écoute signé (5 min, lecture en continu)
     * POST /api/v1/recordings/:id/url
     */
    public function url(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/recordings/' . rawurlencode($id) . '/url', $body, $query);
    }
}
