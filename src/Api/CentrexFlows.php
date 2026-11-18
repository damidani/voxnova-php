<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexFlows
{
    public readonly CentrexFlowsAi $ai;

    public function __construct(private Client $client)
    {
        $this->ai = new CentrexFlowsAi($client);
    }

    /**
     * Scénarios d’appel.
     * Droits : Administrateur.
     * GET /api/centrex/flows
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/flows', null, $query);
    }

    /**
     * Crée un scénario d’appel.
     * Droits : Administrateur.
     * POST /api/centrex/flows
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/flows', $body, $query);
    }

    /**
     * Détail d’un scénario d’appel.
     * Droits : Administrateur.
     * GET /api/centrex/flows/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/flows/' . rawurlencode($id), null, $query);
    }

    /**
     * Modifie un scénario d’appel.
     * Droits : Administrateur.
     * PUT /api/centrex/flows/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/centrex/flows/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un scénario d’appel.
     * Droits : Administrateur.
     * DELETE /api/centrex/flows/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/flows/' . rawurlencode($id), null, $query);
    }

    /**
     * Assistant conversationnel de l'éditeur : propose le scénario modifié, enregistré seulement par l'administrateur.
     * Droits : Administrateur.
     * POST /api/centrex/flows/chat
     */
    public function chat(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/flows/chat', $body, $query);
    }

    /**
     * Simulation : exécute le scénario (requêtes HTTP réelles) avec des saisies fournies.
     * Droits : Administrateur.
     * POST /api/centrex/flows/simulate
     */
    public function simulate(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/flows/simulate', $body, $query);
    }

    /**
     * Vérifie un graphe sans l'enregistrer (erreurs affichées dans l'éditeur).
     * Droits : Administrateur.
     * POST /api/centrex/flows/validate
     */
    public function validate(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/flows/validate', $body, $query);
    }
}
