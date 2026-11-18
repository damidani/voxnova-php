<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Endpoints
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Liste des endpoints SIP (état d’enregistrement)
     * GET /api/v1/endpoints
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/endpoints', null, $query);
    }

    /**
     * Créer un endpoint SIP
     * POST /api/v1/endpoints
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/endpoints', $body, $query);
    }

    /**
     * Détail avec identifiants SIP et enregistrements
     * GET /api/v1/endpoints/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/endpoints/' . rawurlencode($id), null, $query);
    }

    /**
     * Modifier
     * PATCH /api/v1/endpoints/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/v1/endpoints/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprimer
     * DELETE /api/v1/endpoints/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/v1/endpoints/' . rawurlencode($id), null, $query);
    }

    /**
     * Déconnecter les appareils enregistrés
     * POST /api/v1/endpoints/:id/disconnect
     */
    public function disconnect(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/endpoints/' . rawurlencode($id) . '/disconnect', $body, $query);
    }

    /**
     * Générer un nouveau mot de passe SIP (déconnecte les appareils)
     * POST /api/v1/endpoints/:id/password
     */
    public function password(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/endpoints/' . rawurlencode($id) . '/password', $body, $query);
    }

    /**
     * Appareils enregistrés
     * GET /api/v1/endpoints/:id/registrations
     */
    public function getRegistrations(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/endpoints/' . rawurlencode($id) . '/registrations', null, $query);
    }
}
