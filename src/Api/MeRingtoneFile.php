<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeRingtoneFile
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Écoute sa sonnerie personnalisée.
     * Droits : Utilisateur.
     * GET /api/me/ringtone/file
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/ringtone/file', null, $query);
    }

    /**
     * Choisit sa sonnerie personnalisée (multipart : file, audio, 2 Mo).
     * Droits : Utilisateur.
     * POST /api/me/ringtone/file
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/ringtone/file', $body, $query, true);
    }

    /**
     * Supprime sa sonnerie personnalisée.
     * Droits : Utilisateur.
     * DELETE /api/me/ringtone/file
     */
    public function delete(array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/me/ringtone/file', null, $query);
    }
}
