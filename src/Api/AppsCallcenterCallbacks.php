<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenterCallbacks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Met à jour un rappel planifié (date, fait, annulé).
     * Droits : Utilisateur.
     * PATCH /api/apps/callcenter/callbacks/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/apps/callcenter/callbacks/' . rawurlencode($id), $body, $query);
    }
}
