<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class SupportMeta
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Support : disponible ou non (clients d’un revendeur : support assuré par le revendeur), catégories.
     * Droits : Utilisateur.
     * GET /api/support/meta
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/support/meta', null, $query);
    }
}
