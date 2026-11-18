<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgOverview
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Tableau de bord : appels des 30 derniers jours, postes, numéros, consommation.
     * Droits : Administrateur.
     * GET /api/org/overview
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/overview', null, $query);
    }
}
