<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1SmsBalance
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Crédits SMS : forfait du mois et solde à vie
     * GET /api/v1/sms/balance
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/sms/balance', null, $query);
    }
}
