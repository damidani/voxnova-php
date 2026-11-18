<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Audio
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Fichiers audio
     * GET /api/v1/audio
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/audio', null, $query);
    }

    /**
     * Envoyer un fichier audio (multipart, champ file)
     * POST /api/v1/audio
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/audio', $body, $query, true);
    }
}
