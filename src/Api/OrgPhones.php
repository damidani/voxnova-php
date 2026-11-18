<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgPhones
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Téléphones enregistrés (appareil, adresse IP, poste).
     * Droits : Administrateur.
     * GET /api/org/phones
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/phones', null, $query);
    }

    /**
     * Import en masse : [{extension: "101", mac, serial?, provider?}] (200 lignes maximum), résultat ligne par ligne.
     * Droits : Administrateur.
     * POST /api/org/phones/import
     */
    public function import(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/phones/import', $body, $query);
    }
}
