<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerSmsPacks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Packs de SMS.
     * Droits : Revendeur.
     * GET /api/reseller/sms/packs
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/sms/packs', null, $query);
    }

    /**
     * Crée un pack de SMS.
     * Droits : Revendeur.
     * POST /api/reseller/sms/packs
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/sms/packs', $body, $query);
    }

    /**
     * Modifie un pack de SMS.
     * Droits : Revendeur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/reseller/sms/packs/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/reseller/sms/packs/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un pack de SMS.
     * Droits : Revendeur.
     * DELETE /api/reseller/sms/packs/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/sms/packs/' . rawurlencode($id), null, $query);
    }
}
