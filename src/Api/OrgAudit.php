<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgAudit
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Journal d’audit : qui a fait quoi, quand (actions faites avec une clé d’API comprises).
     * Droits : Administrateur.
     * GET /api/org/audit
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/audit', null, $query);
    }
}
