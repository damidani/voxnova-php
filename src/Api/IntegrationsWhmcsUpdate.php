<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class IntegrationsWhmcsUpdate
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Mise à jour automatique du module : version disponible, puis archive (vérifiée par son empreinte).
     * Droits : Administrateur.
     * GET /api/integrations/whmcs/update
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/integrations/whmcs/update', null, $query);
    }
}
