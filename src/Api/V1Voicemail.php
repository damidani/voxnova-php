<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Voicemail
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Boîtes vocales et messages (filtres : extension, unread)
     * GET /api/v1/voicemail
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/voicemail', null, $query);
    }

    /**
     * Un message
     * GET /api/v1/voicemail/:ext/:uuid
     */
    public function get(string $ext, string $uuid, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/voicemail/' . rawurlencode($ext) . '/' . rawurlencode($uuid), null, $query);
    }

    /**
     * Supprimer un message
     * DELETE /api/v1/voicemail/:ext/:uuid
     */
    public function delete(string $ext, string $uuid, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/v1/voicemail/' . rawurlencode($ext) . '/' . rawurlencode($uuid), null, $query);
    }

    /**
     * Marquer lu / non lu
     * POST /api/v1/voicemail/:ext/:uuid/read
     */
    public function read(string $ext, string $uuid, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/voicemail/' . rawurlencode($ext) . '/' . rawurlencode($uuid) . '/read', $body, $query);
    }

    /**
     * Lien d’écoute signé (5 min, lecture en continu) ; marque le message lu
     * POST /api/v1/voicemail/:ext/:uuid/url
     */
    public function url(string $ext, string $uuid, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/voicemail/' . rawurlencode($ext) . '/' . rawurlencode($uuid) . '/url', $body, $query);
    }
}
