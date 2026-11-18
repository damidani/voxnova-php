<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgTrialFreeNumbers
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Numéros libres proposés au client (il choisit ; l'éditeur valide).
     * Droits : Administrateur.
     * GET /api/org/trial/free-numbers
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/trial/free-numbers', null, $query);
    }
}
