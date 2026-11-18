<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class SimpleUsers
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Ajout d'un utilisateur : son poste, et éventuellement son compte (e-mail) et son numéro direct.
     * Droits : Administrateur.
     * POST /api/simple/users
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/simple/users', $body, $query);
    }

    /**
     * Modifie un utilisateur.
     * Droits : Administrateur.
     * PUT /api/simple/users/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/simple/users/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un utilisateur.
     * Droits : Administrateur.
     * DELETE /api/simple/users/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/simple/users/' . rawurlencode($id), null, $query);
    }
}
