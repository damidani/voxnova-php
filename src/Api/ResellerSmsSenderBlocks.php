<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerSmsSenderBlocks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Expéditeurs SMS interdits.
     * Droits : Revendeur.
     * GET /api/reseller/sms/sender-blocks
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/sms/sender-blocks', null, $query);
    }

    /**
     * Crée un expéditeur interdit.
     * Droits : Revendeur.
     * POST /api/reseller/sms/sender-blocks
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/sms/sender-blocks', $body, $query);
    }

    /**
     * Supprime un expéditeur interdit.
     * Droits : Revendeur.
     * DELETE /api/reseller/sms/sender-blocks/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/sms/sender-blocks/' . rawurlencode($id), null, $query);
    }
}
