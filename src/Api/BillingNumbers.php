<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class BillingNumbers
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Numéros disponibles à l’achat dans une zone (?area=01…05 ou 09), prix et nombre de numéros inclus dans l’offre.
     * Droits : Administrateur.
     * GET /api/billing/numbers
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/billing/numbers', null, $query);
    }

    /**
     * Achète un numéro de la liste : attribution immédiate, facturé au prorata s’il n’est pas inclus dans l’offre.
     * Droits : Administrateur.
     * POST /api/billing/numbers
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/billing/numbers', $body, $query);
    }
}
