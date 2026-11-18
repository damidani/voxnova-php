<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexQueuesAgents
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Connecte, met en pause ou déconnecte un agent de la file.
     * Droits : Administrateur.
     * POST /api/centrex/queues/:id/agents/:extId/status
     */
    public function status(string $id, string $extId, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/queues/' . rawurlencode($id) . '/agents/' . rawurlencode($extId) . '/status', $body, $query);
    }
}
