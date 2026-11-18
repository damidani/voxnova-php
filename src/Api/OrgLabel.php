<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgLabel
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Nom affiché de l’entreprise et identifiant court.
     * Droits : Administrateur.
     * GET /api/org/label
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/label', null, $query);
    }

    /**
     * Change le nom affiché.
     * Droits : Administrateur.
     * PUT /api/org/label
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/label', $body, $query);
    }
}
