<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class SatisfactionSurveys
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Crée une enquête.
     * Droits : Administrateur.
     * POST /api/satisfaction/surveys
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/satisfaction/surveys', $body, $query);
    }

    /**
     * Modifie une enquête.
     * Droits : Administrateur.
     * PUT /api/satisfaction/surveys/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/satisfaction/surveys/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une enquête.
     * Droits : Administrateur.
     * DELETE /api/satisfaction/surveys/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/satisfaction/surveys/' . rawurlencode($id), null, $query);
    }
}
