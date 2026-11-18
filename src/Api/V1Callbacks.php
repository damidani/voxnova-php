<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Callbacks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Demander à être rappelé (file d’attente ou poste)
     * POST /api/v1/callbacks
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/callbacks', $body, $query);
    }

    /**
     * État d’une demande de rappel
     * GET /api/v1/callbacks/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/callbacks/' . rawurlencode($id), null, $query);
    }
}
