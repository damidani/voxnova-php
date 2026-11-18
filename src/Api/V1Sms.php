<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Sms
{
    public readonly V1SmsBalance $balance;

    public function __construct(private Client $client)
    {
        $this->balance = new V1SmsBalance($client);
    }

    /**
     * Liste des SMS (filtres : status, to, tag, since)
     * GET /api/v1/sms
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/sms', null, $query);
    }

    /**
     * Envoyer un SMS : mis en file, part en quelques secondes ; statuts par webhook sms.status ou GET /api/v1/sms/{id}
     * POST /api/v1/sms
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/sms', $body, $query);
    }

    /**
     * Un SMS et ses événements de remise (accepted, sent, delivered…)
     * GET /api/v1/sms/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/sms/' . rawurlencode($id), null, $query);
    }
}
