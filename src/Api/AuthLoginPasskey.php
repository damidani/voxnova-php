<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AuthLoginPasskey
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Connexion par clé d’accès (passkey).
     * Droits : Utilisateur.
     * POST /api/auth/login/passkey
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/login/passkey', $body, $query);
    }

    /**
     * Prépare une connexion par clé d’accès (défi WebAuthn).
     * Droits : Utilisateur.
     * POST /api/auth/login/passkey/options
     */
    public function options(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/login/passkey/options', $body, $query);
    }
}
