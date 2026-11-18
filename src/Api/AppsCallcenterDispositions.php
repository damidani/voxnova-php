<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenterDispositions
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Qualifications d’appel.
     * Droits : Utilisateur.
     * GET /api/apps/callcenter/dispositions
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/callcenter/dispositions', null, $query);
    }

    /**
     * Crée une qualification.
     * Droits : Administrateur.
     * POST /api/apps/callcenter/dispositions
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/callcenter/dispositions', $body, $query);
    }

    /**
     * Modifie une qualification.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/apps/callcenter/dispositions/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/apps/callcenter/dispositions/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une qualification.
     * Droits : Administrateur.
     * DELETE /api/apps/callcenter/dispositions/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/apps/callcenter/dispositions/' . rawurlencode($id), null, $query);
    }
}
