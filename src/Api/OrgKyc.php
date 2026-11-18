<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgKyc
{
    public readonly OrgKycDocuments $documents;

    public function __construct(private Client $client)
    {
        $this->documents = new OrgKycDocuments($client);
    }

    /**
     * Identification de l’entreprise : état du dossier et pièces déposées.
     * Droits : Administrateur.
     * GET /api/org/kyc
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/kyc', null, $query);
    }

    /**
     * Dépose le dossier d’identification (type de client, représentant, adresse). Obligatoire avant l’attribution d’un numéro.
     * Droits : Administrateur.
     * POST /api/org/kyc
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/kyc', $body, $query);
    }
}
