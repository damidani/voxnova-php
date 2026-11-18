<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgPhonebook
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Adresse de l’annuaire pour téléphones de bureau.
     * Droits : Administrateur.
     * GET /api/org/phonebook
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/phonebook', null, $query);
    }

    /**
     * Renouvelle l’adresse secrète de l’annuaire.
     * Droits : Administrateur.
     * POST /api/org/phonebook/rotate
     */
    public function rotate(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/phonebook/rotate', $body, $query);
    }
}
