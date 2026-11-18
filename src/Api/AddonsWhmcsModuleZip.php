<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AddonsWhmcsModuleZip
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Télécharge le module WHMCS prêt à installer.
     * Droits : Administrateur.
     * GET /api/addons/whmcs/module.zip
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/addons/whmcs/module.zip', null, $query);
    }
}
