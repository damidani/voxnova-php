<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1CallContext
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Contexte d’un appel passé par un scénario : fiche CRM, variables (code tapé, client identifié…), appelant, numéro appelé. Pour un softphone intégré à votre logiciel (webphone : option resolveContext).
     * GET /api/v1/call-context/:token
     */
    public function get(string $token, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/call-context/' . rawurlencode($token), null, $query);
    }
}
