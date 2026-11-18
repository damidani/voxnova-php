<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Calls
{
    public readonly CallsStats $stats;

    public function __construct(private Client $client)
    {
        $this->stats = new CallsStats($client);
    }

    /**
     * Historique personnel des appels de l’utilisateur (applications et softphone) : page, sens, état, recherche.
     * Droits : Utilisateur.
     * GET /api/calls
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/calls', null, $query);
    }

    /**
     * Enregistre un appel terminé (envoyé par les applications). Idempotent par Call-ID.
     * Droits : Utilisateur.
     * POST /api/calls
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/calls', $body, $query);
    }

    /**
     * Vide son historique d’appels.
     * Droits : Utilisateur.
     * DELETE /api/calls
     */
    public function delete(array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/calls', null, $query);
    }

    /**
     * Ajoute ou modifie la note d’un appel de son historique.
     * Droits : Utilisateur.
     * PATCH /api/calls/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/calls/' . rawurlencode($id), $body, $query);
    }

    /**
     * Retire un appel de son historique.
     * Droits : Utilisateur.
     * DELETE /api/calls/:id
     */
    public function deleteItem(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/calls/' . rawurlencode($id), null, $query);
    }
}
