<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AuthMe
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Utilisateur connecté, son entreprise et ses droits.
     * Droits : Utilisateur.
     * GET /api/auth/me
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/auth/me', null, $query);
    }

    /**
     * Modifie son profil (nom, mot de passe, langue…).
     * Droits : Utilisateur.
     * PATCH /api/auth/me
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/auth/me', $body, $query);
    }
}
