<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class PortingConfig
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Réglages utiles au formulaire : mandat signé en ligne (pas de document à joindre).
     * Droits : Administrateur.
     * GET /api/porting/config
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/porting/config', null, $query);
    }
}
