<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Search
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Recherche globale (contacts, collègues, appels, numéros).
     * Droits : Utilisateur.
     * GET /api/search
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/search', null, $query);
    }
}
