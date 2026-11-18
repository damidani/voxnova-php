<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexSettings
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Réglages du standard : fuseau horaire, numéro présenté par défaut, conservation des messages et enregistrements, musique d’attente.
     * Droits : Administrateur.
     * PATCH /api/centrex/settings
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/centrex/settings', $body, $query);
    }
}
