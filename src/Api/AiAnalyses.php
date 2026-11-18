<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AiAnalyses
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Liste et statistiques (période, poste, note).
     * Droits : Administrateur.
     * GET /api/ai/analyses
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/ai/analyses', null, $query);
    }

    /**
     * Analyse d’un appel : compte rendu, notes par critère, points forts et axes de progrès.
     * Droits : Administrateur.
     * GET /api/ai/analyses/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/ai/analyses/' . rawurlencode($id), null, $query);
    }

    /**
     * Supprime une analyse.
     * Droits : Administrateur.
     * DELETE /api/ai/analyses/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/ai/analyses/' . rawurlencode($id), null, $query);
    }
}
