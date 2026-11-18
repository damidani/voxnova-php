<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerSystemAudioListen
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Écoute un message système.
     * Droits : Revendeur.
     * GET /api/reseller/system-audio/listen
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/system-audio/listen', null, $query);
    }
}
