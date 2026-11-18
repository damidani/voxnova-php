<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerPayment
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Votre moyen de paiement (reversements à la plateforme).
     * Droits : Revendeur.
     * GET /api/reseller/payment
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/payment', null, $query);
    }

    /**
     * Choisit votre moyen de paiement (virement, carte, prélèvement).
     * Droits : Revendeur.
     * PUT /api/reseller/payment
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/reseller/payment', $body, $query);
    }

    /**
     * Enregistre une carte ou un mandat de prélèvement (adresse de la page sécurisée).
     * Droits : Revendeur.
     * POST /api/reseller/payment/setup
     */
    public function setup(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/payment/setup', $body, $query);
    }
}
