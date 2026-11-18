<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexIvr
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Standards vocaux (menus).
     * Droits : Administrateur.
     * GET /api/centrex/ivr
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/ivr', null, $query);
    }

    /**
     * Crée un standard vocal.
     * Droits : Administrateur.
     * POST /api/centrex/ivr
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/ivr', $body, $query);
    }

    /**
     * Modifie un standard vocal.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/centrex/ivr/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/ivr/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un standard vocal.
     * Droits : Administrateur.
     * DELETE /api/centrex/ivr/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/ivr/' . rawurlencode($id), null, $query);
    }
}
