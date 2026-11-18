<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenterOverview
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Tableau de bord du centre d’appels : agents, campagnes, files, indicateurs du jour.
     * Droits : Administrateur.
     * GET /api/apps/callcenter/overview
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/callcenter/overview', null, $query);
    }
}
