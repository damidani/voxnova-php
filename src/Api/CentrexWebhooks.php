<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexWebhooks
{
    public readonly CentrexWebhooksDeliveries $deliveries;

    public function __construct(private Client $client)
    {
        $this->deliveries = new CentrexWebhooksDeliveries($client);
    }

    /**
     * Webhooks.
     * Droits : Administrateur.
     * GET /api/centrex/webhooks
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/webhooks', null, $query);
    }

    /**
     * Crée un webhook.
     * Droits : Administrateur.
     * POST /api/centrex/webhooks
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/webhooks', $body, $query);
    }

    /**
     * Modifie un webhook.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/centrex/webhooks/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/webhooks/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un webhook.
     * Droits : Administrateur.
     * DELETE /api/centrex/webhooks/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/webhooks/' . rawurlencode($id), null, $query);
    }

    /**
     * Journal des envois du webhook (14 jours) : état, nombre d’essais, prochain essai, réponse reçue, contenu envoyé.
     * Droits : Administrateur.
     * GET /api/centrex/webhooks/:id/deliveries
     */
    public function getDeliveries(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/webhooks/' . rawurlencode($id) . '/deliveries', null, $query);
    }

    /**
     * Envoie un événement de test au webhook.
     * Droits : Administrateur.
     * POST /api/centrex/webhooks/:id/test
     */
    public function test(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/webhooks/' . rawurlencode($id) . '/test', $body, $query);
    }
}
