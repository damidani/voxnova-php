<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ServicesSpeedtestDown
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Test de débit descendant (téléchargement).
     * Droits : Administrateur.
     * GET /api/services/speedtest/down
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/services/speedtest/down', null, $query);
    }
}
