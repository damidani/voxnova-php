<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsRadioCalls
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Met à jour un auditeur en attente (nom, note, ordre de passage).
     * Droits : Utilisateur.
     * PATCH /api/apps/radio/calls/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/apps/radio/calls/' . rawurlencode($id), $body, $query);
    }

    /**
     * Actions du standard et de l'antenne.
     * Droits : Utilisateur.
     * POST /api/apps/radio/calls/:id/action
     */
    public function action(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/radio/calls/' . rawurlencode($id) . '/action', $body, $query);
    }
}
