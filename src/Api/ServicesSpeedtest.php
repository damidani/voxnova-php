<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ServicesSpeedtest
{
    public readonly ServicesSpeedtestDown $down;
    public readonly ServicesSpeedtestPing $ping;

    public function __construct(private Client $client)
    {
        $this->down = new ServicesSpeedtestDown($client);
        $this->ping = new ServicesSpeedtestPing($client);
    }

    /**
     * Test de débit montant (envoi).
     * Droits : Administrateur.
     * POST /api/services/speedtest/up
     */
    public function up(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/services/speedtest/up', $body, $query);
    }
}
