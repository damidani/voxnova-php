<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeCalls
{

    public function __construct(private Client $client)
    {
    }

    /**
     * État d'un appel entrant (utilisé par l'app réveillée par push pour détecter une annulation).
     * Droits : Utilisateur.
     * GET /api/me/calls/:callId/state
     */
    public function getState(string $callId, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/calls/' . rawurlencode($callId) . '/state', null, $query);
    }
}
