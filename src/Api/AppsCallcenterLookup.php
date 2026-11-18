<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenterLookup
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Fiche de l'appelant : contact, historique des échanges, rappels, données de campagne.
     * Droits : Utilisateur.
     * GET /api/apps/callcenter/lookup
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/callcenter/lookup', null, $query);
    }
}
