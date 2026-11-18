<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgProvisionedPhones
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Téléphones de bureau associés (MAC, poste, dernière configuration récupérée).
     * Droits : Administrateur.
     * GET /api/org/provisioned-phones
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/provisioned-phones', null, $query);
    }
}
