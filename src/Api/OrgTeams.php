<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgTeams
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Microsoft Teams : état du raccordement et numéros.
     * Droits : Administrateur.
     * GET /api/org/teams
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/teams', null, $query);
    }

    /**
     * Mise en service : sous-domaine du SBC, enregistrement DNS, passerelles vers Microsoft.
     * Droits : Administrateur.
     * POST /api/org/teams/setup
     */
    public function setup(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/teams/setup', $body, $query);
    }

    /**
     * Code de vérification du domaine donné par Microsoft 365 (« MS=ms12345678 ») : enregistrement TXT.
     * Droits : Administrateur.
     * POST /api/org/teams/verification
     */
    public function verification(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/teams/verification', $body, $query);
    }
}
