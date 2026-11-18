<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsHotelStays
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Historique des séjours.
     * Droits : Utilisateur.
     * GET /api/apps/hotel/stays
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/hotel/stays', null, $query);
    }
}
