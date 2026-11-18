<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Billing
{
    public readonly BillingInvoices $invoices;
    public readonly BillingLicenseKey $licenseKey;
    public readonly BillingNumbers $numbers;
    public readonly BillingOrders $orders;
    public readonly BillingPaymentMethods $paymentMethods;

    public function __construct(private Client $client)
    {
        $this->invoices = new BillingInvoices($client);
        $this->licenseKey = new BillingLicenseKey($client);
        $this->numbers = new BillingNumbers($client);
        $this->orders = new BillingOrders($client);
        $this->paymentMethods = new BillingPaymentMethods($client);
    }

    /**
     * Abonnement, licences, moyens de paiement, factures, consommation et offres proposées.
     * Droits : Administrateur.
     * GET /api/billing
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/billing', null, $query);
    }

    /**
     * Active ou désactive le renouvellement automatique de l’abonnement.
     * Droits : Administrateur.
     * POST /api/billing/auto-renew
     */
    public function autoRenew(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/billing/auto-renew', $body, $query);
    }

    /**
     * Souscription / changement d'offre.
     * Droits : Administrateur.
     * POST /api/billing/checkout
     */
    public function checkout(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/billing/checkout', $body, $query);
    }

    /**
     * Calcule le prix d’une offre (postes, canaux, numéros, options) sans rien souscrire.
     * Droits : Administrateur.
     * POST /api/billing/quote
     */
    public function quote(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/billing/quote', $body, $query);
    }
}
