<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AiStatus
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Analyse IA : disponible ou non, quota du mois.
     * Droits : Administrateur.
     * GET /api/ai/status
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/ai/status', null, $query);
    }
}
