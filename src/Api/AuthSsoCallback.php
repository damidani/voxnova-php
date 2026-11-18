<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AuthSsoCallback
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Retour de l’authentification unique (SSO) de l’entreprise.
     * Droits : Utilisateur.
     * GET /api/auth/sso/callback
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/auth/sso/callback', null, $query);
    }
}
