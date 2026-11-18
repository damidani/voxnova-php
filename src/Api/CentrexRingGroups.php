<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexRingGroups
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Groupes d’appel.
     * Droits : Administrateur.
     * GET /api/centrex/ring-groups
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/ring-groups', null, $query);
    }

    /**
     * Crée un groupe d’appel.
     * Droits : Administrateur.
     * POST /api/centrex/ring-groups
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/ring-groups', $body, $query);
    }

    /**
     * Modifie un groupe d’appel.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/centrex/ring-groups/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/ring-groups/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un groupe d’appel.
     * Droits : Administrateur.
     * DELETE /api/centrex/ring-groups/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/ring-groups/' . rawurlencode($id), null, $query);
    }
}
