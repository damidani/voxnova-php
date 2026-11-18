<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexVoiceboxes
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Messageries partagées.
     * Droits : Administrateur.
     * GET /api/centrex/voiceboxes
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/voiceboxes', null, $query);
    }

    /**
     * Crée une messagerie partagée.
     * Droits : Administrateur.
     * POST /api/centrex/voiceboxes
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/voiceboxes', $body, $query);
    }

    /**
     * Modifie une messagerie partagée.
     * Droits : Administrateur.
     * PUT /api/centrex/voiceboxes/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/voiceboxes/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une messagerie partagée.
     * Droits : Administrateur.
     * DELETE /api/centrex/voiceboxes/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/voiceboxes/' . rawurlencode($id), null, $query);
    }
}
