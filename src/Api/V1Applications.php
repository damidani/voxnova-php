<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Applications
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Liste des applications
     * GET /api/v1/applications
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/applications', null, $query);
    }

    /**
     * Créer une application
     * POST /api/v1/applications
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/applications', $body, $query);
    }

    /**
     * Détail
     * GET /api/v1/applications/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/applications/' . rawurlencode($id), null, $query);
    }

    /**
     * Modifier
     * PATCH /api/v1/applications/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/v1/applications/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprimer (les numéros reliés sont détachés)
     * DELETE /api/v1/applications/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/v1/applications/' . rawurlencode($id), null, $query);
    }

    /**
     * Nouvelle clé de signature
     * POST /api/v1/applications/:id/secret
     */
    public function secret(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/applications/' . rawurlencode($id) . '/secret', $body, $query);
    }
}
