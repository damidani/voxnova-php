<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerMe
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Votre compte revendeur : mode (apporteur ou marque blanche), marque, réglages.
     * Droits : Revendeur.
     * GET /api/reseller/me
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/me', null, $query);
    }
}
