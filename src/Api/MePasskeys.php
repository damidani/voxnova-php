<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MePasskeys
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Clés d’accès (passkeys).
     * Droits : Utilisateur.
     * GET /api/me/passkeys
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/passkeys', null, $query);
    }

    /**
     * Crée une clé d’accès.
     * Droits : Utilisateur.
     * POST /api/me/passkeys
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/passkeys', $body, $query);
    }

    /**
     * Supprime une clé d’accès.
     * Droits : Utilisateur.
     * DELETE /api/me/passkeys/:id
     */
    public function delete(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/me/passkeys/' . rawurlencode($id), $body, $query);
    }

    /**
     * Ajout : le mot de passe est redemandé (une session volée ne doit pas pouvoir ajouter sa propre clé).
     * Droits : Utilisateur.
     * POST /api/me/passkeys/options
     */
    public function options(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/passkeys/options', $body, $query);
    }
}
