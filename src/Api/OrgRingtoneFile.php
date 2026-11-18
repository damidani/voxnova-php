<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgRingtoneFile
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Écoute la sonnerie personnalisée de l’entreprise.
     * Droits : Utilisateur.
     * GET /api/org/ringtone/file
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/ringtone/file', null, $query);
    }

    /**
     * Sonnerie personnalisée (multipart : file, audio).
     * Droits : Administrateur.
     * POST /api/org/ringtone/file
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/ringtone/file', $body, $query, true);
    }

    /**
     * Supprime la sonnerie personnalisée de l’entreprise.
     * Droits : Administrateur.
     * DELETE /api/org/ringtone/file
     */
    public function delete(array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/ringtone/file', null, $query);
    }
}
