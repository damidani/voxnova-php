<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MessagesConversations
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Conversations de messagerie instantanée.
     * Droits : Utilisateur.
     * GET /api/messages/conversations
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/messages/conversations', null, $query);
    }
}
