<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgMessagingWhatsapp
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Connecte WhatsApp (QR code à scanner, voir GET /api/org/messaging).
     * Droits : Administrateur.
     * POST /api/org/messaging/whatsapp/connect
     */
    public function connect(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/messaging/whatsapp/connect', $body, $query);
    }

    /**
     * Déconnecte WhatsApp.
     * Droits : Administrateur.
     * POST /api/org/messaging/whatsapp/logout
     */
    public function logout(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/messaging/whatsapp/logout', $body, $query);
    }
}
