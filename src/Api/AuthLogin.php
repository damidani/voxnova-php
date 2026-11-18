<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AuthLogin
{
    public readonly AuthLoginPasskey $passkey;

    public function __construct(private Client $client)
    {
        $this->passkey = new AuthLoginPasskey($client);
    }

    /**
     * Connexion par e-mail et mot de passe : jeton de session (12 h) et jeton de renouvellement, ou étape de double authentification.
     * Droits : Utilisateur.
     * POST /api/auth/login
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/login', $body, $query);
    }

    /**
     * Connexion par carte de connexion (QR code).
     * Droits : Utilisateur.
     * POST /api/auth/login/card
     */
    public function card(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/login/card', $body, $query);
    }

    /**
     * Seconde étape de la connexion : code de l'application d'authentification (ou code de secours).
     * Droits : Utilisateur.
     * POST /api/auth/login/mfa
     */
    public function mfa(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/login/mfa', $body, $query);
    }
}
