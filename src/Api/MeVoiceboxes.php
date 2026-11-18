<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeVoiceboxes
{
    public readonly MeVoiceboxesMessages $messages;

    public function __construct(private Client $client)
    {
        $this->messages = new MeVoiceboxesMessages($client);
    }

    /**
     * Messageries partagées dont il est membre et leurs messages.
     * Droits : Utilisateur.
     * GET /api/me/voiceboxes
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/voiceboxes', null, $query);
    }
}
