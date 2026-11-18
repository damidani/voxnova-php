<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AuthVerifyEmail
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Confirme l’adresse e-mail avec le lien reçu.
     * Droits : Utilisateur.
     * POST /api/auth/verify-email
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/verify-email', $body, $query);
    }

    /**
     * Adresse saisie avec une faute : l'utilisateur la corrige tant qu'elle n'est pas confirmée.
     * Droits : Utilisateur.
     * POST /api/auth/verify-email/change
     */
    public function change(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/verify-email/change', $body, $query);
    }

    /**
     * Renvoie l’e-mail de confirmation.
     * Droits : Utilisateur.
     * POST /api/auth/verify-email/resend
     */
    public function resend(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/verify-email/resend', $body, $query);
    }
}
