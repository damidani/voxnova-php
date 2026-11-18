<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerCatalog
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Offres de l'éditeur (prix de gros ou commission) et offres du revendeur (marque blanche).
     * Droits : Revendeur.
     * GET /api/reseller/catalog
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/catalog', null, $query);
    }
}
