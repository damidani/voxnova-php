<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AuthSso
{
    public readonly AuthSsoCallback $callback;

    public function __construct(private Client $client)
    {
        $this->callback = new AuthSsoCallback($client);
    }

    /**
     * Application mobile : code à usage unique (5 min) échangé par l'application contre sa propre session.
     * Droits : Utilisateur.
     * POST /api/auth/sso/app-handoff
     */
    public function appHandoff(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/sso/app-handoff', $body, $query);
    }

    /**
     * Démarre une connexion par l’authentification unique (SSO) de l’entreprise.
     * Droits : Utilisateur.
     * POST /api/auth/sso/start
     */
    public function start(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/sso/start', $body, $query);
    }
}
