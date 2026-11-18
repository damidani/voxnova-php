<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexQueues
{
    public readonly CentrexQueuesAgents $agents;

    public function __construct(private Client $client)
    {
        $this->agents = new CentrexQueuesAgents($client);
    }

    /**
     * Files d’attente.
     * Droits : Administrateur.
     * GET /api/centrex/queues
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/queues', null, $query);
    }

    /**
     * Crée une file d’attente.
     * Droits : Administrateur.
     * POST /api/centrex/queues
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/queues', $body, $query);
    }

    /**
     * Modifie une file d’attente.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/centrex/queues/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/queues/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une file d’attente.
     * Droits : Administrateur.
     * DELETE /api/centrex/queues/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/queues/' . rawurlencode($id), null, $query);
    }

    /**
     * File d’attente en direct : appels en attente, agents et leur état.
     * Droits : Administrateur.
     * GET /api/centrex/queues/:id/live
     */
    public function getLive(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/queues/' . rawurlencode($id) . '/live', null, $query);
    }

    /**
     * Statistiques de la file : appels reçus, servis, abandonnés, temps d’attente.
     * Droits : Administrateur.
     * GET /api/centrex/queues/:id/stats
     */
    public function getStats(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/queues/' . rawurlencode($id) . '/stats', null, $query);
    }

    /**
     * resynchronisation d'une file après modification des niveaux
     * Droits : Administrateur.
     * POST /api/centrex/queues/:id/sync
     */
    public function sync(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/queues/' . rawurlencode($id) . '/sync', $body, $query);
    }
}
