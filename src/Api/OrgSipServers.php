<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgSipServers
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Serveurs SIP (PBX raccordés).
     * Droits : Administrateur.
     * GET /api/org/sip-servers
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/sip-servers', null, $query);
    }

    /**
     * Crée un serveur SIP.
     * Droits : Administrateur.
     * POST /api/org/sip-servers
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/sip-servers', $body, $query);
    }

    /**
     * Modifie un serveur SIP.
     * Droits : Administrateur.
     * PUT /api/org/sip-servers/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/sip-servers/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un serveur SIP.
     * Droits : Administrateur.
     * DELETE /api/org/sip-servers/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/sip-servers/' . rawurlencode($id), null, $query);
    }

    /**
     * Teste la connectivité avec le PBX (SIP OPTIONS) et, si demandé, l'URL WebSocket.
     * Droits : Administrateur.
     * POST /api/org/sip-servers/:id/test
     */
    public function test(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/sip-servers/' . rawurlencode($id) . '/test', $body, $query);
    }
}
