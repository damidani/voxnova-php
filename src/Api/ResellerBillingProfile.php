<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerBillingProfile
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Vos coordonnées de facturation (en-tête des factures de vos clients).
     * Droits : Revendeur.
     * GET /api/reseller/billing-profile
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/billing-profile', null, $query);
    }

    /**
     * Modifie vos coordonnées de facturation.
     * Droits : Revendeur.
     * PUT /api/reseller/billing-profile
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/reseller/billing-profile', $body, $query);
    }
}
