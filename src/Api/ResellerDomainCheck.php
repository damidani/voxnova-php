<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerDomainCheck
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Vérification du domaine propre : il doit pointer vers le serveur (CNAME ou A).
     * Droits : Revendeur.
     * GET /api/reseller/domain-check
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/domain-check', null, $query);
    }
}
