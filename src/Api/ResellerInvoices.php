<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerInvoices
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Factures de vos clients (filtre par état).
     * Droits : Revendeur.
     * GET /api/reseller/invoices
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/invoices', null, $query);
    }

    /**
     * Détail d’une facture.
     * Droits : Revendeur.
     * GET /api/reseller/invoices/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/invoices/' . rawurlencode($id), null, $query);
    }

    /**
     * Annule une facture non réglée.
     * Droits : Revendeur.
     * POST /api/reseller/invoices/:id/cancel
     */
    public function cancel(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/invoices/' . rawurlencode($id) . '/cancel', $body, $query);
    }

    /**
     * Marque blanche : le revendeur encaisse ses clients et valide leurs paiements (active ou prolonge l'abonnement).
     * Droits : Revendeur.
     * POST /api/reseller/invoices/:id/validate
     */
    public function validate(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/invoices/' . rawurlencode($id) . '/validate', $body, $query);
    }
}
