<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerBranding
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Votre marque : nom, logo, couleurs, e-mail et site du support, domaine du panneau.
     * Droits : Revendeur.
     * PUT /api/reseller/branding
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/reseller/branding', $body, $query);
    }
}
