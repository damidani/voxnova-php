<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Addons
{
    public readonly AddonsWhmcs $whmcs;

    public function __construct(private Client $client)
    {
        $this->whmcs = new AddonsWhmcs($client);
    }

    /**
     * Options disponibles et options souscrites (prix, état, réglages).
     * Droits : Administrateur.
     * GET /api/addons
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/addons', null, $query);
    }

    /**
     * Résilie une option.
     * Droits : Administrateur.
     * POST /api/addons/:code/cancel
     */
    public function cancel(string $code, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/addons/' . rawurlencode($code) . '/cancel', $body, $query);
    }

    /**
     * Souscrit une option (code : whmcs, satisfaction…).
     * Droits : Administrateur.
     * POST /api/addons/:code/subscribe
     */
    public function subscribe(string $code, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/addons/' . rawurlencode($code) . '/subscribe', $body, $query);
    }

    /**
     * Crée (ou remplace) le jeton de connexion de l’option (module WHMCS) ; affiché une seule fois.
     * Droits : Administrateur.
     * POST /api/addons/:code/token
     */
    public function token(string $code, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/addons/' . rawurlencode($code) . '/token', $body, $query);
    }
}
