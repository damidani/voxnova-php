<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexNumbers
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Numéros de l’entreprise.
     * Droits : Administrateur.
     * GET /api/centrex/numbers
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/numbers', null, $query);
    }

    /**
     * Ajout d'un numéro porté par un trunk de l'entreprise (les numéros de la plateforme sont attribués par l'éditeur).
     * Droits : Administrateur.
     * POST /api/centrex/numbers
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/numbers', $body, $query);
    }

    /**
     * Modifie un numéro.
     * Droits : Administrateur.
     * PUT /api/centrex/numbers/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/numbers/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un numéro.
     * Droits : Administrateur.
     * DELETE /api/centrex/numbers/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/numbers/' . rawurlencode($id), null, $query);
    }
}
