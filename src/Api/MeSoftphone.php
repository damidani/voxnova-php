<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeSoftphone
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Configuration complète du softphone (comptes SIP, serveurs WebSocket, ICE/TURN).
     * Droits : Utilisateur.
     * GET /api/me/softphone
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/softphone', null, $query);
    }
}
