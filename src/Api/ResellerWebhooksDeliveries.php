<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerWebhooksDeliveries
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Renvoie tout de suite un envoi.
     * Droits : Revendeur.
     * POST /api/reseller/webhooks/:id/deliveries/:delivery/retry
     */
    public function retry(string $id, string $delivery, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/webhooks/' . rawurlencode($id) . '/deliveries/' . rawurlencode($delivery) . '/retry', $body, $query);
    }
}
