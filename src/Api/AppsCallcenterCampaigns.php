<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenterCampaigns
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Campagnes d’appels.
     * Droits : Utilisateur.
     * GET /api/apps/callcenter/campaigns
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/callcenter/campaigns', null, $query);
    }

    /**
     * Crée une campagne.
     * Droits : Administrateur.
     * POST /api/apps/callcenter/campaigns
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/callcenter/campaigns', $body, $query);
    }

    /**
     * Modifie une campagne.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/apps/callcenter/campaigns/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/apps/callcenter/campaigns/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une campagne.
     * Droits : Administrateur.
     * DELETE /api/apps/callcenter/campaigns/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/apps/callcenter/campaigns/' . rawurlencode($id), null, $query);
    }

    /**
     * Contacts d’une campagne et leur état (à appeler, joint, à rappeler…).
     * Droits : Utilisateur.
     * GET /api/apps/callcenter/campaigns/:id/contacts
     */
    public function getContacts(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/callcenter/campaigns/' . rawurlencode($id) . '/contacts', null, $query);
    }

    /**
     * Import de contacts : CSV « numéro;nom;autres colonnes… » (première ligne d'en-têtes facultative).
     * Droits : Administrateur.
     * POST /api/apps/callcenter/campaigns/:id/contacts
     */
    public function contacts(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/callcenter/campaigns/' . rawurlencode($id) . '/contacts', $body, $query);
    }

    /**
     * Contact suivant pour l'agent (verrouillé pour lui jusqu'à la qualification).
     * Droits : Utilisateur.
     * POST /api/apps/callcenter/campaigns/:id/next
     */
    public function next(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/callcenter/campaigns/' . rawurlencode($id) . '/next', $body, $query);
    }
}
