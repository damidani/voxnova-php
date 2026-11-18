<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexStatus
{

    public function __construct(private Client $client)
    {
    }

    /**
     * État du standard : activé, nombre de postes, numéros, groupes, files, menus.
     * Droits : Administrateur.
     * GET /api/centrex/status
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/status', null, $query);
    }
}
