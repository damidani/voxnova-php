<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexLive
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Appels en cours dans l’entreprise.
     * Droits : Administrateur.
     * GET /api/centrex/live
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/live', null, $query);
    }

    /**
     * Raccroche un appel en cours.
     * Droits : Administrateur.
     * POST /api/centrex/live/:uuid/hangup
     */
    public function hangup(string $uuid, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/live/' . rawurlencode($uuid) . '/hangup', $body, $query);
    }

    /**
     * Superviseur : écouter, chuchoter à l'agent ou intervenir dans un appel en cours.
     * Droits : Administrateur.
     * POST /api/centrex/live/:uuid/spy
     */
    public function spy(string $uuid, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/live/' . rawurlencode($uuid) . '/spy', $body, $query);
    }
}
