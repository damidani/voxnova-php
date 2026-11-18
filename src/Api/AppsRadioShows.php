<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsRadioShows
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Émissions.
     * Droits : Utilisateur.
     * GET /api/apps/radio/shows
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/radio/shows', null, $query);
    }

    /**
     * Crée une émission.
     * Droits : Administrateur.
     * POST /api/apps/radio/shows
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/radio/shows', $body, $query);
    }

    /**
     * Modifie une émission.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/apps/radio/shows/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/apps/radio/shows/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une émission.
     * Droits : Administrateur.
     * DELETE /api/apps/radio/shows/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/apps/radio/shows/' . rawurlencode($id), null, $query);
    }

    /**
     * État en direct : auditeurs, antenne, studio.
     * Droits : Utilisateur.
     * GET /api/apps/radio/shows/:id/live
     */
    public function getLive(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/radio/shows/' . rawurlencode($id) . '/live', null, $query);
    }

    /**
     * Ouvre ou ferme le studio de l’émission (prise d’appels).
     * Droits : Utilisateur.
     * POST /api/apps/radio/shows/:id/studio
     */
    public function studio(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/radio/shows/' . rawurlencode($id) . '/studio', $body, $query);
    }
}
