<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Me_2fa
{

    public function __construct(private Client $client)
    {
    }

    /**
     * État de la double authentification.
     * Droits : Utilisateur.
     * GET /api/me/2fa
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/2fa', null, $query);
    }

    /**
     * Désactive la double authentification.
     * Droits : Utilisateur.
     * POST /api/me/2fa/disable
     */
    public function disable(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/2fa/disable', $body, $query);
    }

    /**
     * Active la double authentification (code de l’application d’authentification).
     * Droits : Utilisateur.
     * POST /api/me/2fa/enable
     */
    public function enable(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/2fa/enable', $body, $query);
    }

    /**
     * Nouveau secret (en attente de confirmation par un premier code).
     * Droits : Utilisateur.
     * POST /api/me/2fa/setup
     */
    public function setup(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/2fa/setup', $body, $query);
    }
}
