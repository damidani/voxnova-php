<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Extensions
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Postes de l’entreprise (identifiant, numéro interne, nom, actif)
     * GET /api/v1/extensions
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/extensions', null, $query);
    }
}
