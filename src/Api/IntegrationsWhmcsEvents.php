<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class IntegrationsWhmcsEvents
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Appels terminés et analyses IA depuis les curseurs donnés (synchronisation des notes).
     * Droits : Administrateur.
     * GET /api/integrations/whmcs/events
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/integrations/whmcs/events', null, $query);
    }
}
