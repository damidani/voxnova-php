<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgTelecom
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Numéros présentables et lignes (pour configurer un PBX).
     * Droits : Administrateur.
     * GET /api/org/telecom
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/telecom', null, $query);
    }
}
