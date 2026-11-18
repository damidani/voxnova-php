<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeRingtone
{
    public readonly MeRingtoneFile $file;

    public function __construct(private Client $client)
    {
        $this->file = new MeRingtoneFile($client);
    }

    /**
     * Sa sonnerie (interne et externe).
     * Droits : Utilisateur.
     * GET /api/me/ringtone
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/ringtone', null, $query);
    }

    /**
     * Change sa sonnerie.
     * Droits : Utilisateur.
     * PUT /api/me/ringtone
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/me/ringtone', $body, $query);
    }
}
