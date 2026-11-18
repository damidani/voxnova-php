<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerStatements
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Relevés mensuels (commissions ou reversements).
     * Droits : Revendeur.
     * GET /api/reseller/statements
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/statements', null, $query);
    }

    /**
     * Relevé d’un mois (AAAA-MM) détaillé par client.
     * Droits : Revendeur.
     * GET /api/reseller/statements/:month
     */
    public function get(string $month, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/statements/' . rawurlencode($month), null, $query);
    }
}
