<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsHotelSettings
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Réglages de l’hôtel : tarifs des appels, numéros autorisés, réveils.
     * Droits : Utilisateur.
     * GET /api/apps/hotel/settings
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/hotel/settings', null, $query);
    }

    /**
     * Modifie les réglages de l’hôtel.
     * Droits : Administrateur.
     * PUT /api/apps/hotel/settings
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/apps/hotel/settings', $body, $query);
    }
}
