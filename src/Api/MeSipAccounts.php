<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeSipAccounts
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Réglages Centrex personnels : renvois, ne pas déranger, messagerie vocale. Mes comptes SIP (postes du standard hébergé) pour un téléphone de bureau ou une application tierce.
     * Droits : Utilisateur.
     * GET /api/me/sip-accounts
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/sip-accounts', null, $query);
    }
}
