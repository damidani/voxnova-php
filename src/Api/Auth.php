<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Auth
{
    public readonly AuthLogin $login;
    public readonly AuthMe $me;
    public readonly AuthSso $sso;
    public readonly AuthVerifyEmail $verifyEmail;

    public function __construct(private Client $client)
    {
        $this->login = new AuthLogin($client);
        $this->me = new AuthMe($client);
        $this->sso = new AuthSso($client);
        $this->verifyEmail = new AuthVerifyEmail($client);
    }

    /**
     * Accepte une invitation : choix du mot de passe, compte activé.
     * Droits : Utilisateur.
     * POST /api/auth/accept-invite
     */
    public function acceptInvite(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/accept-invite', $body, $query);
    }

    /**
     * Envoie un lien de réinitialisation du mot de passe.
     * Droits : Utilisateur.
     * POST /api/auth/forgot
     */
    public function forgot(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/forgot', $body, $query);
    }

    /**
     * Consommation d'un lien de connexion automatique : ouvre la session (une seule fois). Appelée par la page /sso du panneau.
     * Droits : Utilisateur.
     * POST /api/auth/login-link
     */
    public function loginLink(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/login-link', $body, $query);
    }

    /**
     * Déconnexion : jeton de renouvellement révoqué.
     * Droits : Utilisateur.
     * POST /api/auth/logout
     */
    public function logout(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/logout', $body, $query);
    }

    /**
     * Connexion d'une application mobile/bureau par QR code (jeton à usage unique)
     * Droits : Utilisateur.
     * POST /api/auth/provision
     */
    public function provision(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/provision', $body, $query);
    }

    /**
     * Renouvelle le jeton de session avec le jeton de renouvellement.
     * Droits : Utilisateur.
     * POST /api/auth/refresh
     */
    public function refresh(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/refresh', $body, $query);
    }

    /**
     * Choisit un nouveau mot de passe avec le lien reçu par e-mail.
     * Droits : Utilisateur.
     * POST /api/auth/reset
     */
    public function reset(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/reset', $body, $query);
    }

    /**
     * Inscription d’une nouvelle entreprise (période d’essai).
     * Droits : Utilisateur.
     * POST /api/auth/signup
     */
    public function signup(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/signup', $body, $query);
    }

    /**
     * Fin d'usurpation d'identité (retour au compte super-admin)
     * Droits : Utilisateur.
     * POST /api/auth/stop-impersonation
     */
    public function stopImpersonation(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/auth/stop-impersonation', $body, $query);
    }
}
