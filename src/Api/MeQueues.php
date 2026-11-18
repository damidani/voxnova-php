<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeQueues
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Ses files d’attente et son état dans chacune (connecté, en pause).
     * Droits : Utilisateur.
     * GET /api/me/queues
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/queues', null, $query);
    }

    /**
     * Choix en une fois : `active` = files gardées (toutes les autres sont quittées ; [] = absent de toutes).
     * Droits : Utilisateur.
     * PUT /api/me/queues
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/me/queues', $body, $query);
    }

    /**
     * Entrer dans une file ou en sortir.
     * Droits : Utilisateur.
     * PUT /api/me/queues/:id
     */
    public function updateItem(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/me/queues/' . rawurlencode($id), $body, $query);
    }

    /**
     * Se connecte, se met en pause ou se déconnecte de ses files.
     * Droits : Utilisateur.
     * POST /api/me/queues/status
     */
    public function status(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/queues/status', $body, $query);
    }
}
