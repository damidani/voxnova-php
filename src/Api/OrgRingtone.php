<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgRingtone
{
    public readonly OrgRingtoneFile $file;

    public function __construct(private Client $client)
    {
        $this->file = new OrgRingtoneFile($client);
    }

    /**
     * Sonnerie par défaut de l’entreprise.
     * Droits : Administrateur.
     * PUT /api/org/ringtone
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/ringtone', $body, $query);
    }
}
