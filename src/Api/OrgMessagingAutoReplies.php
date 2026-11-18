<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgMessagingAutoReplies
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Réponses automatiques WhatsApp (par mot-clé).
     * Droits : Administrateur.
     * GET /api/org/messaging/auto-replies
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/messaging/auto-replies', null, $query);
    }

    /**
     * Modifie les réponses automatiques WhatsApp.
     * Droits : Administrateur.
     * PUT /api/org/messaging/auto-replies
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/messaging/auto-replies', $body, $query);
    }
}
