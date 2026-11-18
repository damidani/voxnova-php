<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgExtensionsPhone
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Associe un téléphone de bureau au poste par son adresse MAC : il se configure tout seul au branchement (constructeur détecté d’après la MAC, ou précisé).
     * Droits : Administrateur.
     * POST /api/org/extensions/:id/phone
     */
    public function create(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/extensions/' . rawurlencode($id) . '/phone', $body, $query);
    }

    /**
     * Dissocie un téléphone de bureau du poste.
     * Droits : Administrateur.
     * DELETE /api/org/extensions/:id/phone/:provider/:mac
     */
    public function delete(string $id, string $provider, string $mac, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/extensions/' . rawurlencode($id) . '/phone/' . rawurlencode($provider) . '/' . rawurlencode($mac), null, $query);
    }
}
