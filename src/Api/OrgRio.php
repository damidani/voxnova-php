<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgRio
{

    public function __construct(private Client $client)
    {
    }

    /**
     * RIO de vos numéros (pour les transférer vers un autre opérateur).
     * Droits : Administrateur.
     * GET /api/org/rio
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/rio', null, $query);
    }
}
