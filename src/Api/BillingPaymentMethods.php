<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class BillingPaymentMethods
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Enregistre une carte bancaire (vérifiée par une autorisation de 0 €) ; elle devient le moyen de paiement par défaut.
     * Droits : Administrateur.
     * POST /api/billing/payment-methods
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/billing/payment-methods', $body, $query);
    }

    /**
     * Supprime un moyen de paiement.
     * Droits : Administrateur.
     * DELETE /api/billing/payment-methods/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/billing/payment-methods/' . rawurlencode($id), null, $query);
    }
}
