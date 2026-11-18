<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgFeatures
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Fonctions activées ou masquées dans l’entreprise.
     * Droits : Administrateur.
     * GET /api/org/features
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/features', null, $query);
    }

    /**
     * Active ou masque une fonction.
     * Droits : Administrateur.
     * PUT /api/org/features/:key
     */
    public function update(string $key, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/features/' . rawurlencode($key), $body, $query);
    }
}
