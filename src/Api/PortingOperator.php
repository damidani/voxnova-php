<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class PortingOperator
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Opérateur actuel d'un numéro, pendant la saisie de la demande (bases de portabilité).
     * Droits : Administrateur.
     * GET /api/porting/operator
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/porting/operator', null, $query);
    }
}
