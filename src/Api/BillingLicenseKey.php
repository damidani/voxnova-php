<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class BillingLicenseKey
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Clé de licence de l’abonnement en cours (installation sur site).
     * Droits : Administrateur.
     * GET /api/billing/license-key
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/billing/license-key', null, $query);
    }
}
