<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeAi
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Analyses IA de ses propres appels.
     * Droits : Utilisateur.
     * GET /api/me/ai
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/ai', null, $query);
    }

    /**
     * Analyse IA d’un de ses appels.
     * Droits : Utilisateur.
     * GET /api/me/ai/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/ai/' . rawurlencode($id), null, $query);
    }
}
