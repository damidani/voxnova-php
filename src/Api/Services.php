<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Services
{
    public readonly ServicesOrders $orders;
    public readonly ServicesSpeedtest $speedtest;

    public function __construct(private Client $client)
    {
        $this->orders = new ServicesOrders($client);
        $this->speedtest = new ServicesSpeedtest($client);
    }

    /**
     * Services proposés (internet, mobile, cybersécurité) et leurs offres.
     * Droits : Administrateur.
     * GET /api/services
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/services', null, $query);
    }

    /**
     * Enregistre le résultat d’un test de box (débit, latence).
     * Droits : Administrateur.
     * POST /api/services/box-tests
     */
    public function boxTests(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/services/box-tests', $body, $query);
    }

    /**
     * Test d’éligibilité d’une adresse à la fibre : offres disponibles et prix.
     * Droits : Administrateur.
     * POST /api/services/eligibility
     */
    public function eligibility(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/services/eligibility', $body, $query);
    }
}
