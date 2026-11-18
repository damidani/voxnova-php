<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexDestinations
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Toutes les destinations possibles (listes déroulantes de l'interface).
     * Droits : Administrateur.
     * GET /api/centrex/destinations
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/destinations', null, $query);
    }
}
