<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgDevices
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Appareils (applications) des utilisateurs de l’entreprise.
     * Droits : Administrateur.
     * GET /api/org/devices
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/devices', null, $query);
    }
}
