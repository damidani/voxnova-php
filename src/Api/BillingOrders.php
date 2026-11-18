<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class BillingOrders
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Annulation d'une commande pas encore payée (paiement manuel).
     * Droits : Administrateur.
     * POST /api/billing/orders/:id/cancel
     */
    public function cancel(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/billing/orders/' . rawurlencode($id) . '/cancel', $body, $query);
    }
}
