<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenterPauseReasons
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Motifs de pause.
     * Droits : Utilisateur.
     * GET /api/apps/callcenter/pause-reasons
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/callcenter/pause-reasons', null, $query);
    }

    /**
     * Crée un motif de pause.
     * Droits : Administrateur.
     * POST /api/apps/callcenter/pause-reasons
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/callcenter/pause-reasons', $body, $query);
    }

    /**
     * Supprime un motif de pause.
     * Droits : Administrateur.
     * DELETE /api/apps/callcenter/pause-reasons/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/apps/callcenter/pause-reasons/' . rawurlencode($id), null, $query);
    }
}
