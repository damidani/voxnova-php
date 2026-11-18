<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexConferences
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Salles de conférence.
     * Droits : Administrateur.
     * GET /api/centrex/conferences
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/conferences', null, $query);
    }

    /**
     * Crée une salle de conférence.
     * Droits : Administrateur.
     * POST /api/centrex/conferences
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/conferences', $body, $query);
    }

    /**
     * Modifie une salle de conférence.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/centrex/conferences/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/conferences/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une salle de conférence.
     * Droits : Administrateur.
     * DELETE /api/centrex/conferences/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/conferences/' . rawurlencode($id), null, $query);
    }

    /**
     * Action sur une conférence en cours : couper ou rétablir le micro d’un participant, l’exclure, verrouiller la salle.
     * Droits : Administrateur.
     * POST /api/centrex/conferences/:id/action
     */
    public function action(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/conferences/' . rawurlencode($id) . '/action', $body, $query);
    }

    /**
     * Participants d’une conférence en cours.
     * Droits : Administrateur.
     * GET /api/centrex/conferences/:id/live
     */
    public function getLive(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/conferences/' . rawurlencode($id) . '/live', null, $query);
    }
}
