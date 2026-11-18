<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ServicesOrders
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Commandes de services de l’entreprise.
     * Droits : Administrateur.
     * GET /api/services/orders
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/services/orders', null, $query);
    }

    /**
     * Demande de service : pas d'achat immédiat, l'éditeur confirme (devis, commande, installation).
     * Droits : Administrateur.
     * POST /api/services/orders
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/services/orders', $body, $query);
    }

    /**
     * Annule une commande pas encore passée.
     * Droits : Administrateur.
     * POST /api/services/orders/:id/cancel
     */
    public function cancel(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/services/orders/' . rawurlencode($id) . '/cancel', $body, $query);
    }
}
