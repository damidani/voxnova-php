<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgCalls
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Historiques d’appels des applications de tous les utilisateurs (filtre userId) ; le journal complet du standard est GET /api/centrex/cdr.
     * Droits : Administrateur.
     * GET /api/org/calls
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/calls', null, $query);
    }
}
