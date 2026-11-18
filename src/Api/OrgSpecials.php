<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgSpecials
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Numéros spéciaux et courts : blocage et plafond mensuel.
     * Droits : Administrateur.
     * GET /api/org/specials
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/specials', null, $query);
    }
}
