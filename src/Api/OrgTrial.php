<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgTrial
{
    public readonly OrgTrialFreeNumbers $freeNumbers;

    public function __construct(private Client $client)
    {
        $this->freeNumbers = new OrgTrialFreeNumbers($client);
    }

    /**
     * Période d’essai : jours et minutes restants.
     * Droits : Utilisateur.
     * GET /api/org/trial
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/trial', null, $query);
    }

    /**
     * Demande un numéro ou une démo étendue pendant l’essai.
     * Droits : Administrateur.
     * POST /api/org/trial/requests
     */
    public function requests(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/trial/requests', $body, $query);
    }
}
