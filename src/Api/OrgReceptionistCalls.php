<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgReceptionistCalls
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Appels traités par le standardiste IA.
     * Droits : Administrateur.
     * GET /api/org/receptionist/calls
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/receptionist/calls', null, $query);
    }
}
