<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Numbers
{
    public readonly V1NumbersAvailable $available;

    public function __construct(private Client $client)
    {
        $this->available = new V1NumbersAvailable($client);
    }

    /**
     * Vos numéros
     * GET /api/v1/numbers
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/numbers', null, $query);
    }

    /**
     * Acheter un numéro
     * POST /api/v1/numbers
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/numbers', $body, $query);
    }

    /**
     * Router vers une application ou un endpoint
     * PATCH /api/v1/numbers/:number
     */
    public function update(string $number, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/v1/numbers/' . rawurlencode($number), $body, $query);
    }

    /**
     * Résilier (retour au stock)
     * DELETE /api/v1/numbers/:number
     */
    public function delete(string $number, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/v1/numbers/' . rawurlencode($number), null, $query);
    }
}
