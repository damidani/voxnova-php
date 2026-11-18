<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsHotelWakeups
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Supprime un réveil.
     * Droits : Utilisateur.
     * DELETE /api/apps/hotel/wakeups/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/apps/hotel/wakeups/' . rawurlencode($id), null, $query);
    }
}
