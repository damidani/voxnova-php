<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgDomain
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Domaine SIP de l’entreprise.
     * Droits : Administrateur.
     * GET /api/org/domain
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/domain', null, $query);
    }

    /**
     * Change le domaine SIP (sous-domaine de la plateforme ou domaine personnalisé).
     * Droits : Administrateur.
     * PUT /api/org/domain
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/org/domain', $body, $query);
    }

    /**
     * Vérifie qu’un domaine personnalisé pointe bien vers la plateforme.
     * Droits : Administrateur.
     * POST /api/org/domain/check
     */
    public function check(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/domain/check', $body, $query);
    }
}
