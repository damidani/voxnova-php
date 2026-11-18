<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerClients
{
    public readonly ResellerClientsSms $sms;

    public function __construct(private Client $client)
    {
        $this->sms = new ResellerClientsSms($client);
    }

    /**
     * Vos clients avec leur abonnement en cours (?q= recherche).
     * Droits : Revendeur.
     * GET /api/reseller/clients
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/clients', null, $query);
    }

    /**
     * Crée un client : entreprise, administrateur (e-mail et mot de passe), type de service, jours d’essai.
     * Droits : Revendeur.
     * POST /api/reseller/clients
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/clients', $body, $query);
    }

    /**
     * Fiche d’un client : utilisateurs, licences, factures, postes utilisés.
     * Droits : Revendeur.
     * GET /api/reseller/clients/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/clients/' . rawurlencode($id), null, $query);
    }

    /**
     * Suspend, réactive un client ou prolonge son essai.
     * Droits : Revendeur.
     * PATCH /api/reseller/clients/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/reseller/clients/' . rawurlencode($id), $body, $query);
    }

    /**
     * Ouvre une session dans le panneau du client, en tant que son administrateur.
     * Droits : Revendeur.
     * POST /api/reseller/clients/:id/impersonate
     */
    public function impersonate(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/clients/' . rawurlencode($id) . '/impersonate', $body, $query);
    }

    /**
     * Licences d'un client (offre, quantités, échéances).
     * Droits : Revendeur.
     * GET /api/reseller/clients/:id/licenses
     */
    public function getLicenses(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/clients/' . rawurlencode($id) . '/licenses', null, $query);
    }

    /**
     * Lien de connexion automatique au panneau du client (usage unique, 60 s par défaut) : WHMCS « Se connecter », espace client du revendeur. `user` : e-mail ou identifiant d'un utilisateur du client (par défaut son administrateur) ; `next` : page d'arrivée.
     * Droits : Revendeur.
     * POST /api/reseller/clients/:id/login-link
     */
    public function loginLink(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/clients/' . rawurlencode($id) . '/login-link', $body, $query);
    }

    /**
     * Option SMS / WhatsApp d'un client : activation, plafond WhatsApp, expéditeur par défaut (les crédits SMS : packs).
     * Droits : Revendeur.
     * PUT /api/reseller/clients/:id/messaging
     */
    public function updateMessaging(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/reseller/clients/' . rawurlencode($id) . '/messaging', $body, $query);
    }

    /**
     * Coordonnées et réglages d'un client : raison sociale, facturation, adresse, fuseau horaire.
     * Droits : Revendeur.
     * PATCH /api/reseller/clients/:id/profile
     */
    public function updateProfile(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/reseller/clients/' . rawurlencode($id) . '/profile', $body, $query);
    }

    /**
     * SMS du client : crédits et consommation.
     * Droits : Revendeur.
     * GET /api/reseller/clients/:id/sms
     */
    public function getSms(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/clients/' . rawurlencode($id) . '/sms', null, $query);
    }

    /**
     * Ajoute un pack de SMS au client.
     * Droits : Revendeur.
     * POST /api/reseller/clients/:id/sms/pack
     */
    public function smsPack(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/clients/' . rawurlencode($id) . '/sms/pack', $body, $query);
    }

    /**
     * Interdit un expéditeur SMS pour ce client.
     * Droits : Revendeur.
     * POST /api/reseller/clients/:id/sms/sender-blocks
     */
    public function smsSenderBlocks(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/clients/' . rawurlencode($id) . '/sms/sender-blocks', $body, $query);
    }

    /**
     * Abonne un client à une de vos offres (marque blanche, quand vous facturez vous-même) : postes, canaux, numéros, options, durée.
     * Droits : Revendeur.
     * POST /api/reseller/clients/:id/subscription
     */
    public function subscription(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/clients/' . rawurlencode($id) . '/subscription', $body, $query);
    }

    /**
     * Fin de contrat (résiliation WHMCS) : abonnements annulés et compte suspendu. Les données sont conservées.
     * Droits : Revendeur.
     * POST /api/reseller/clients/:id/terminate
     */
    public function terminate(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/clients/' . rawurlencode($id) . '/terminate', $body, $query);
    }
}
