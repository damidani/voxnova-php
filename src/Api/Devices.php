<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Devices
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Appareils (applications mobiles et de bureau).
     * Droits : Utilisateur.
     * GET /api/devices
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/devices', null, $query);
    }

    /**
     * Crée un appareil.
     * Droits : Utilisateur.
     * POST /api/devices
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/devices', $body, $query);
    }

    /**
     * Supprime un appareil.
     * Droits : Utilisateur.
     * DELETE /api/devices/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/devices/' . rawurlencode($id), null, $query);
    }

    /**
     * Erreurs de l'application mobile (exception non rattrapée, écran en échec) : tracées dans le journal du serveur (recherche « erreur application ») pour comprendre les plantages signalés. Limité : 20 par minute et par compte.
     * Droits : Utilisateur.
     * POST /api/devices/error
     */
    public function error(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/devices/error', $body, $query);
    }

    /**
     * Envoie un appel de test sur les téléphones de l'utilisateur (vérifie le réveil).
     * Droits : Utilisateur.
     * POST /api/devices/test-push
     */
    public function testPush(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/devices/test-push', $body, $query);
    }

    /**
     * Déconnexion de l'application : le téléphone n'est plus réveillé pour ce compte.
     * Droits : Utilisateur.
     * POST /api/devices/unregister
     */
    public function unregister(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/devices/unregister', $body, $query);
    }
}
