<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Messages
{
    public readonly MessagesConversations $conversations;

    public function __construct(private Client $client)
    {
        $this->conversations = new MessagesConversations($client);
    }

    /**
     * Envoie un message instantané à un collègue.
     * Droits : Utilisateur.
     * POST /api/messages
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/messages', $body, $query);
    }

    /**
     * Conversation avec un collègue.
     * Droits : Utilisateur.
     * GET /api/messages/:peer
     */
    public function get(string $peer, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/messages/' . rawurlencode($peer), null, $query);
    }

    /**
     * Marque la conversation comme lue.
     * Droits : Utilisateur.
     * POST /api/messages/:peer/read
     */
    public function read(string $peer, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/messages/' . rawurlencode($peer) . '/read', $body, $query);
    }
}
