<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class BillingInvoices
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Facture en PDF (Factur-X si la plateforme agréée est configurée).
     * Droits : Administrateur.
     * GET /api/billing/invoices/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/billing/invoices/' . rawurlencode($id), null, $query);
    }
}
