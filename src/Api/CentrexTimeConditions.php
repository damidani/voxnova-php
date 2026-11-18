<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexTimeConditions
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Horaires.
     * Droits : Administrateur.
     * GET /api/centrex/time-conditions
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/time-conditions', null, $query);
    }

    /**
     * Crée un horaire.
     * Droits : Administrateur.
     * POST /api/centrex/time-conditions
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/time-conditions', $body, $query);
    }

    /**
     * Modifie un horaire.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/centrex/time-conditions/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/time-conditions/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un horaire.
     * Droits : Administrateur.
     * DELETE /api/centrex/time-conditions/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/time-conditions/' . rawurlencode($id), null, $query);
    }
}
