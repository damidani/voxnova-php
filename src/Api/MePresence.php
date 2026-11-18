<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MePresence
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Sa présence (disponible, occupé, absent…).
     * Droits : Utilisateur.
     * GET /api/me/presence
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/presence', null, $query);
    }

    /**
     * Change sa présence.
     * Droits : Utilisateur.
     * PUT /api/me/presence
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/me/presence', $body, $query);
    }
}
