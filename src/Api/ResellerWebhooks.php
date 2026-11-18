<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerWebhooks
{
    public readonly ResellerWebhooksDeliveries $deliveries;

    public function __construct(private Client $client)
    {
        $this->deliveries = new ResellerWebhooksDeliveries($client);
    }

    /**
     * Vos webhooks (adresse, événements, état).
     * Droits : Revendeur.
     * GET /api/reseller/webhooks
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/webhooks', null, $query);
    }

    /**
     * Crée un webhook : adresse HTTPS et événements (appels, messages vocaux, SMS, portabilité, numéros, factures, vie des clients) ; secret de signature renvoyé une fois.
     * Droits : Revendeur.
     * POST /api/reseller/webhooks
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/webhooks', $body, $query);
    }

    /**
     * Modifie un webhook (adresse, événements, actif).
     * Droits : Revendeur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PATCH /api/reseller/webhooks/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/reseller/webhooks/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un webhook.
     * Droits : Revendeur.
     * DELETE /api/reseller/webhooks/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/webhooks/' . rawurlencode($id), null, $query);
    }

    /**
     * Journal des envois du webhook (14 jours) : état, nombre d’essais, prochain essai, réponse reçue, contenu envoyé.
     * Droits : Revendeur.
     * GET /api/reseller/webhooks/:id/deliveries
     */
    public function getDeliveries(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/webhooks/' . rawurlencode($id) . '/deliveries', null, $query);
    }

    /**
     * Envoie un événement de test au webhook.
     * Droits : Revendeur.
     * POST /api/reseller/webhooks/:id/test
     */
    public function test(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/webhooks/' . rawurlencode($id) . '/test', $body, $query);
    }
}
