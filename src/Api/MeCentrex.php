<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeCentrex
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Ses postes : renvois, ne pas déranger, messagerie vocale.
     * Droits : Utilisateur.
     * GET /api/me/centrex
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/centrex', null, $query);
    }

    /**
     * Modifie un de ses postes : renvoi immédiat, sur occupation, sans réponse, ne pas déranger.
     * Droits : Utilisateur.
     * PATCH /api/me/centrex/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/me/centrex/' . rawurlencode($id), $body, $query);
    }
}
