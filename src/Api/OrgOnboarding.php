<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgOnboarding
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Étapes de mise en route restantes.
     * Droits : Administrateur.
     * GET /api/org/onboarding
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/onboarding', null, $query);
    }

    /**
     * Termine la mise en route.
     * Droits : Administrateur.
     * POST /api/org/onboarding
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/onboarding', $body, $query);
    }
}
