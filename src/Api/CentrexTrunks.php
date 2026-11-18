<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexTrunks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Trunks d’opérateur.
     * Droits : Administrateur.
     * GET /api/centrex/trunks
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/trunks', null, $query);
    }

    /**
     * Crée un trunk.
     * Droits : Administrateur.
     * POST /api/centrex/trunks
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/trunks', $body, $query);
    }

    /**
     * Modifie un trunk.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/centrex/trunks/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/trunks/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un trunk.
     * Droits : Administrateur.
     * DELETE /api/centrex/trunks/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/trunks/' . rawurlencode($id), null, $query);
    }

    /**
     * État d’enregistrement d’un trunk d’opérateur.
     * Droits : Administrateur.
     * GET /api/centrex/trunks/:id/status
     */
    public function getStatus(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/trunks/' . rawurlencode($id) . '/status', null, $query);
    }
}
