<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerTroubleshoot
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Diagnostic d’un client.
     * Droits : Revendeur.
     * GET /api/reseller/troubleshoot/:orgId
     */
    public function get(string $orgId, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/troubleshoot/' . rawurlencode($orgId), null, $query);
    }

    /**
     * Appel de test chez un client.
     * Droits : Revendeur.
     * POST /api/reseller/troubleshoot/:orgId/call
     */
    public function call(string $orgId, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/troubleshoot/' . rawurlencode($orgId) . '/call', $body, $query);
    }

    /**
     * Cibles possibles pour l’appel de test.
     * Droits : Revendeur.
     * GET /api/reseller/troubleshoot/:orgId/targets
     */
    public function getTargets(string $orgId, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/troubleshoot/' . rawurlencode($orgId) . '/targets', null, $query);
    }
}
