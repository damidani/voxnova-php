<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AddonsWhmcsSettings
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Réglages du module WHMCS : notes d’appels dans la fiche client, résumé IA, fiche à l’appel.
     * Droits : Administrateur.
     * PUT /api/addons/whmcs/settings
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/addons/whmcs/settings', $body, $query);
    }
}
