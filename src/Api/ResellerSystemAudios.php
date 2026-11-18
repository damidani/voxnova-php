<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerSystemAudios
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Messages système (annonces de la plateforme) personnalisables.
     * Droits : Revendeur.
     * GET /api/reseller/system-audios
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/system-audios', null, $query);
    }
}
