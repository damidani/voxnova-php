<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerSystemAudio
{
    public readonly ResellerSystemAudioListen $listen;

    public function __construct(private Client $client)
    {
        $this->listen = new ResellerSystemAudioListen($client);
    }

    /**
     * Remplace un message système par le vôtre (multipart : key, file).
     * Droits : Revendeur.
     * POST /api/reseller/system-audio
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/system-audio', $body, $query, true);
    }

    /**
     * Rétablit le message système d’origine.
     * Droits : Revendeur.
     * DELETE /api/reseller/system-audio
     */
    public function delete(array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/system-audio', null, $query);
    }
}
