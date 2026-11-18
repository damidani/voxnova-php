<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerPortal
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Espace client hébergé chez vous : envoie le lien de réinitialisation du mot de passe à vos couleurs (resetUrl : votre page qui reçoit ?token=, puis POST /api/auth/reset). Réponse identique que le compte existe ou non.
     * Droits : Revendeur.
     * POST /api/reseller/portal/forgot
     */
    public function forgot(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/portal/forgot', $body, $query);
    }

    /**
     * Espace client hébergé chez vous : vérifie l’e-mail et le mot de passe d’un utilisateur d’un de VOS clients (puis le code de double authentification : réponse { mfaRequired: true } sans code). Ne délivre aucun jeton : agissez ensuite avec votre clé, X-Organization et X-User. Limité par clé et par adresse du visiteur (clientIp).
     * Droits : Revendeur.
     * POST /api/reseller/portal/login
     */
    public function login(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/portal/login', $body, $query);
    }
}
