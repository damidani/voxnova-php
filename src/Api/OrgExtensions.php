<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgExtensions
{
    public readonly OrgExtensionsPhone $phone;

    public function __construct(private Client $client)
    {
        $this->phone = new OrgExtensionsPhone($client);
    }

    /**
     * Postes.
     * Droits : Administrateur.
     * GET /api/org/extensions
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/extensions', null, $query);
    }

    /**
     * Crée un poste.
     * Droits : Administrateur.
     * POST /api/org/extensions
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/extensions', $body, $query);
    }

    /**
     * Modifie un poste.
     * Droits : Administrateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/org/extensions/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/extensions/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un poste.
     * Droits : Administrateur.
     * DELETE /api/org/extensions/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/extensions/' . rawurlencode($id), null, $query);
    }

    /**
     * Site du poste (télétravail, agence) pour les appels d'urgence ; null = commune de l'entreprise.
     * Droits : Administrateur.
     * PUT /api/org/extensions/:id/location
     */
    public function updateLocation(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/extensions/' . rawurlencode($id) . '/location', $body, $query);
    }

    /**
     * Paramètres SIP du poste à saisir dans un téléphone de bureau ou une application SIP.
     * Droits : Administrateur.
     * GET /api/org/extensions/:id/sip-account
     */
    public function getSipAccount(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/extensions/' . rawurlencode($id) . '/sip-account', null, $query);
    }

    /**
     * Nouveau mot de passe SIP : les téléphones configurés avec l'ancien sont déconnectés.
     * Droits : Administrateur.
     * POST /api/org/extensions/:id/sip-password
     */
    public function sipPassword(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/extensions/' . rawurlencode($id) . '/sip-password', $body, $query);
    }

    /**
     * État d'enregistrement de la passerelle auprès du PBX pour cette extension.
     * Droits : Administrateur.
     * GET /api/org/extensions/:id/status
     */
    public function getStatus(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/extensions/' . rawurlencode($id) . '/status', null, $query);
    }

    /**
     * Numéro Teams d'un collaborateur (attribué dans Teams par Set-CsPhoneNumberAssignment).
     * Droits : Administrateur.
     * PUT /api/org/extensions/:id/teams
     */
    public function updateTeams(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/extensions/' . rawurlencode($id) . '/teams', $body, $query);
    }
}
