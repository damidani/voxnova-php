<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenterContacts
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Libère un contact réservé par un agent (remis dans la campagne).
     * Droits : Utilisateur.
     * POST /api/apps/callcenter/contacts/:id/release
     */
    public function release(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/callcenter/contacts/' . rawurlencode($id) . '/release', $body, $query);
    }
}
