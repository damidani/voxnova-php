<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgUsers
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Utilisateurs.
     * Droits : Administrateur.
     * GET /api/org/users
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/users', null, $query);
    }

    /**
     * Crée un utilisateur.
     * Droits : Administrateur.
     * POST /api/org/users
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/users', $body, $query);
    }

    /**
     * Modifie un utilisateur.
     * Droits : Administrateur.
     * PATCH /api/org/users/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/org/users/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un utilisateur.
     * Droits : Administrateur.
     * DELETE /api/org/users/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/users/' . rawurlencode($id), null, $query);
    }

    /**
     * Renvoie l’invitation par e-mail.
     * Droits : Administrateur.
     * POST /api/org/users/:id/invite
     */
    public function invite(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/users/' . rawurlencode($id) . '/invite', $body, $query);
    }

    /**
     * Rôles spécialisés : un utilisateur voit certaines données de l'entreprise (journal des appels…).
     * Droits : Administrateur.
     * PUT /api/org/users/:id/permissions
     */
    public function updatePermissions(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/users/' . rawurlencode($id) . '/permissions', $body, $query);
    }

    /**
     * QR code de connexion pour l'application mobile d'un collaborateur.
     * Droits : Administrateur.
     * POST /api/org/users/:id/provisioning
     */
    public function provisioning(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/users/' . rawurlencode($id) . '/provisioning', $body, $query);
    }

    /**
     * Collaborateur qui a perdu son téléphone : double authentification et verrouillage réinitialisés.
     * Droits : Administrateur.
     * POST /api/org/users/:id/security-reset
     */
    public function securityReset(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/users/' . rawurlencode($id) . '/security-reset', $body, $query);
    }
}
