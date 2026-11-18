<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class IntegrationsWhmcsLookup
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Le module déclare l'adresse de son point d'interrogation (lookup.php) et un secret partagé (codes support).
     * Droits : Administrateur.
     * PUT /api/integrations/whmcs/lookup
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/integrations/whmcs/lookup', $body, $query);
    }
}
