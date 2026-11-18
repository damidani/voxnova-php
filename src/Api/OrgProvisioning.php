<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgProvisioning
{
    public readonly OrgProvisioningProviders $providers;

    public function __construct(private Client $client)
    {
        $this->providers = new OrgProvisioningProviders($client);
    }

    /**
     * Modèles de téléphones d’un constructeur.
     * Droits : Administrateur.
     * GET /api/org/provisioning/:provider/models
     */
    public function getModels(string $provider, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/provisioning/' . rawurlencode($provider) . '/models', null, $query);
    }
}
