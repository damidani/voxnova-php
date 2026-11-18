<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgMessagingHistory
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Historique complet des SMS et WhatsApp, page par page (?month=AAAA-MM, channel, status, q) : crédits utilisés et montant au comptage de chaque SMS, totaux de la période.
     * Droits : Administrateur.
     * GET /api/org/messaging/history
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/messaging/history', null, $query);
    }
}
