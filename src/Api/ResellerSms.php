<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerSms
{
    public readonly ResellerSmsPacks $packs;
    public readonly ResellerSmsSenderBlocks $senderBlocks;

    public function __construct(private Client $client)
    {
        $this->packs = new ResellerSmsPacks($client);
        $this->senderBlocks = new ResellerSmsSenderBlocks($client);
    }

    /**
     * Tous les SMS des clients du revendeur (suivi de remise).
     * Droits : Revendeur.
     * GET /api/reseller/sms
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/sms', null, $query);
    }
}
