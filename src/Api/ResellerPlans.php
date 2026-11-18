<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerPlans
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Crée une offre.
     * Droits : Revendeur.
     * POST /api/reseller/plans
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/plans', $body, $query);
    }

    /**
     * Modifie une offre.
     * Droits : Revendeur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/reseller/plans/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/reseller/plans/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une offre.
     * Droits : Revendeur.
     * DELETE /api/reseller/plans/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/plans/' . rawurlencode($id), null, $query);
    }
}
