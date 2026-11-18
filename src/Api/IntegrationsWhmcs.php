<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class IntegrationsWhmcs
{
    public readonly IntegrationsWhmcsEvents $events;
    public readonly IntegrationsWhmcsLive $live;
    public readonly IntegrationsWhmcsLookup $lookup;
    public readonly IntegrationsWhmcsPing $ping;
    public readonly IntegrationsWhmcsSupervision $supervision;
    public readonly IntegrationsWhmcsUpdate $update;
    public readonly IntegrationsWhmcsUpdateZip $updateZip;

    public function __construct(private Client $client)
    {
        $this->events = new IntegrationsWhmcsEvents($client);
        $this->live = new IntegrationsWhmcsLive($client);
        $this->lookup = new IntegrationsWhmcsLookup($client);
        $this->ping = new IntegrationsWhmcsPing($client);
        $this->supervision = new IntegrationsWhmcsSupervision($client);
        $this->update = new IntegrationsWhmcsUpdate($client);
        $this->updateZip = new IntegrationsWhmcsUpdateZip($client);
    }

    /**
     * Module WHMCS : lance un appel depuis la fiche client.
     * Droits : Administrateur.
     * POST /api/integrations/whmcs/call
     */
    public function call(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/integrations/whmcs/call', $body, $query);
    }
}
