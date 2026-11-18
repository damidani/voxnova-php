<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class SimpleNumbers
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Destination d'un numéro : un utilisateur, plusieurs (sonnerie simultanée) ou une messagerie.
     * Droits : Administrateur.
     * PUT /api/simple/numbers/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/simple/numbers/' . rawurlencode($id), $body, $query);
    }
}
