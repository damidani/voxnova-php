<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgCallbacks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Demandes de rappel.
     * Droits : Administrateur.
     * GET /api/org/callbacks
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/callbacks', null, $query);
    }

    /**
     * Crée une demande de rappel.
     * Droits : Administrateur.
     * POST /api/org/callbacks
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/callbacks', $body, $query);
    }

    /**
     * Supprime une demande de rappel.
     * Droits : Administrateur.
     * DELETE /api/org/callbacks/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/callbacks/' . rawurlencode($id), null, $query);
    }

    /**
     * Depuis une demande : bloque son numéro (entreprise) et, pour l'éditeur, bannit l'adresse IP de l'auteur.
     * Droits : Administrateur.
     * POST /api/org/callbacks/:id/block
     */
    public function block(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/callbacks/' . rawurlencode($id) . '/block', $body, $query);
    }
}
