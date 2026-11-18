<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgProvisioningProviders
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Fournisseurs activés par l'éditeur, avec ce qu'il faut choisir (modèle, gamme).
     * Droits : Administrateur.
     * GET /api/org/provisioning/providers
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/provisioning/providers', null, $query);
    }
}
