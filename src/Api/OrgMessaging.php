<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgMessaging
{
    public readonly OrgMessagingAutoReplies $autoReplies;
    public readonly OrgMessagingHistory $history;
    public readonly OrgMessagingWhatsapp $whatsapp;

    public function __construct(private Client $client)
    {
        $this->autoReplies = new OrgMessagingAutoReplies($client);
        $this->history = new OrgMessagingHistory($client);
        $this->whatsapp = new OrgMessagingWhatsapp($client);
    }

    /**
     * SMS et WhatsApp : plafonds, consommation, crédits, état de WhatsApp, journal des envois.
     * Droits : Administrateur.
     * GET /api/org/messaging
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/messaging', null, $query);
    }

    /**
     * Envoie un SMS ou un WhatsApp de test.
     * Droits : Administrateur.
     * POST /api/org/messaging/test
     */
    public function test(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/messaging/test', $body, $query);
    }
}
