<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AiCalls
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Analyse à la demande d'un appel enregistré (journal des appels).
     * Droits : Administrateur.
     * POST /api/ai/calls/:id/analyze
     */
    public function analyze(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/ai/calls/' . rawurlencode($id) . '/analyze', $body, $query);
    }
}
