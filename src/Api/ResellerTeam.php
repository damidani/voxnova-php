<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerTeam
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Les membres de votre équipe revendeur.
     * Droits : Revendeur.
     * GET /api/reseller/team
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/team', null, $query);
    }

    /**
     * Ajoute un membre à votre équipe (invitation par e-mail).
     * Droits : Revendeur.
     * POST /api/reseller/team
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/team', $body, $query);
    }

    /**
     * Supprime un membre de l’équipe.
     * Droits : Revendeur.
     * DELETE /api/reseller/team/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/team/' . rawurlencode($id), null, $query);
    }
}
