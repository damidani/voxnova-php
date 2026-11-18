<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeCallContext
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Contexte d’un appel entrant passé par un scénario : par jeton (en-tête SIP X-VX-Ctx de l’appel) ou, à défaut, l’appel le plus récent de ce numéro (3 minutes). Renvoie la fiche CRM, l’ouverture au décroché et les variables du scénario. null si aucun.
     * Droits : Utilisateur.
     * GET /api/me/call-context
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/call-context', null, $query);
    }

    /**
     * L’utilisateur a décroché : le premier qui répond déclenche la requête configurée vers le CRM (une seule fois par appel, signée) ; renvoie la fiche et first: true/false.
     * Droits : Utilisateur.
     * POST /api/me/call-context/:token/answered
     */
    public function answered(string $token, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/call-context/' . rawurlencode($token) . '/answered', $body, $query);
    }
}
