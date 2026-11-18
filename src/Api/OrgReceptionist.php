<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgReceptionist
{
    public readonly OrgReceptionistCalls $calls;

    public function __construct(private Client $client)
    {
        $this->calls = new OrgReceptionistCalls($client);
    }

    /**
     * Réglages du standardiste IA.
     * Droits : Administrateur.
     * GET /api/org/receptionist
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/receptionist', null, $query);
    }

    /**
     * Configure le standardiste IA (voix, consignes, transferts).
     * Droits : Administrateur.
     * PUT /api/org/receptionist
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/receptionist', $body, $query);
    }
}
