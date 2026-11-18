<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1ClickToCall
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Clic pour appeler : le poste sonne, puis le numéro est appelé au décroché (droits du poste)
     * POST /api/v1/click-to-call
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/click-to-call', $body, $query);
    }

    /**
     * État : ringing (le poste sonne), dialing (numéro composé), in_progress, completed, not_answered, failed
     * GET /api/v1/click-to-call/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/click-to-call/' . rawurlencode($id), null, $query);
    }

    /**
     * Raccrocher (qu’il sonne encore ou soit en cours)
     * DELETE /api/v1/click-to-call/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/v1/click-to-call/' . rawurlencode($id), null, $query);
    }
}
