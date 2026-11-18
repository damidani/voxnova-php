<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgPermissions
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Liste des droits attribuables aux utilisateurs.
     * Droits : Administrateur.
     * GET /api/org/permissions
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/permissions', null, $query);
    }
}
