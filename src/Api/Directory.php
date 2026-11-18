<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Directory
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Annuaire des collègues (extensions de l'entreprise) avec présence en temps réel.
     * Droits : Utilisateur.
     * GET /api/directory
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/directory', null, $query);
    }
}
