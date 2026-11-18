<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgSms
{
    public readonly OrgSmsMessages $messages;

    public function __construct(private Client $client)
    {
        $this->messages = new OrgSmsMessages($client);
    }

    /**
     * SMS : crédits, expéditeur, réglages.
     * Droits : Administrateur.
     * GET /api/org/sms
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/sms', null, $query);
    }
}
