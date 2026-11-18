<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerPreferences
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Préférences : qui facture vos clients, essai, minutes de démo.
     * Droits : Revendeur.
     * GET /api/reseller/preferences
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/preferences', null, $query);
    }

    /**
     * Modifie vos préférences.
     * Droits : Revendeur.
     * PUT /api/reseller/preferences
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/reseller/preferences', $body, $query);
    }
}
