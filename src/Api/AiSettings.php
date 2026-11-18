<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AiSettings
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Réglages de l’analyse IA : appels analysés, durée minimale, consignes propres à l’entreprise.
     * Droits : Administrateur.
     * PUT /api/ai/settings
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/ai/settings', $body, $query);
    }
}
