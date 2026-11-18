<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgReferral
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Lien de parrainage et filleuls.
     * Droits : Administrateur.
     * GET /api/org/referral
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/referral', null, $query);
    }
}
