<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexFlowsAi
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Assistant de création de scénario : disponibilité.
     * Droits : Administrateur.
     * GET /api/centrex/flows/ai
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/flows/ai', null, $query);
    }

    /**
     * Crée un scénario d’appel à partir d’une description en français.
     * Droits : Administrateur.
     * POST /api/centrex/flows/ai
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/flows/ai', $body, $query);
    }
}
