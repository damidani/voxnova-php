<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerApiKeys
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Vos clés d’API.
     * Droits : Revendeur.
     * GET /api/reseller/api-keys
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/api-keys', null, $query);
    }

    /**
     * Crée une clé vxr_ (lecture seule et adresses IP autorisées en option). Depuis le panneau seulement ; la clé est affichée une seule fois.
     * Droits : Revendeur.
     * POST /api/reseller/api-keys
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/api-keys', $body, $query);
    }

    /**
     * Restreindre une clé existante : lecture seule et/ou adresses IP autorisées (liste vide : toutes).
     * Droits : Revendeur.
     * PATCH /api/reseller/api-keys/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/reseller/api-keys/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une clé d’API.
     * Droits : Revendeur.
     * DELETE /api/reseller/api-keys/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/api-keys/' . rawurlencode($id), null, $query);
    }
}
