<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgCallbackWidgets
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Crée un widget de rappel.
     * Droits : Administrateur.
     * POST /api/org/callback-widgets
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/callback-widgets', $body, $query);
    }

    /**
     * Modifie un widget de rappel.
     * Droits : Administrateur.
     * PUT /api/org/callback-widgets/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/callback-widgets/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un widget de rappel.
     * Droits : Administrateur.
     * DELETE /api/org/callback-widgets/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/callback-widgets/' . rawurlencode($id), null, $query);
    }
}
