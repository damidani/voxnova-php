<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgCallbackBlocks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Numéros bloqués pour les rappels.
     * Droits : Administrateur.
     * GET /api/org/callback-blocks
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/callback-blocks', null, $query);
    }

    /**
     * Crée un blocage.
     * Droits : Administrateur.
     * POST /api/org/callback-blocks
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/callback-blocks', $body, $query);
    }

    /**
     * Supprime un blocage.
     * Droits : Administrateur.
     * DELETE /api/org/callback-blocks/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/callback-blocks/' . rawurlencode($id), null, $query);
    }
}
