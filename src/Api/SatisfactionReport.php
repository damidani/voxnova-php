<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class SatisfactionReport
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Rapport par agent, file et critère.
     * Droits : Administrateur.
     * GET /api/satisfaction/report
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/satisfaction/report', null, $query);
    }
}
