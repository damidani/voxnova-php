<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeLoginCards
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Cartes de connexion.
     * Droits : Utilisateur.
     * GET /api/me/login-cards
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/login-cards', null, $query);
    }

    /**
     * Crée une carte de connexion.
     * Droits : Administrateur.
     * POST /api/me/login-cards
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/login-cards', $body, $query);
    }

    /**
     * Supprime une carte de connexion.
     * Droits : Utilisateur.
     * DELETE /api/me/login-cards/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/me/login-cards/' . rawurlencode($id), null, $query);
    }
}
