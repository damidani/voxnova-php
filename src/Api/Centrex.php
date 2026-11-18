<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Centrex
{
    public readonly CentrexApiKeys $apiKeys;
    public readonly CentrexAudio $audio;
    public readonly CentrexCdr $cdr;
    public readonly CentrexConferences $conferences;
    public readonly CentrexDestinations $destinations;
    public readonly CentrexFlows $flows;
    public readonly CentrexIvr $ivr;
    public readonly CentrexLive $live;
    public readonly CentrexNumbers $numbers;
    public readonly CentrexQueues $queues;
    public readonly CentrexRingGroups $ringGroups;
    public readonly CentrexSettings $settings;
    public readonly CentrexStats $stats;
    public readonly CentrexStatus $status;
    public readonly CentrexTimeConditions $timeConditions;
    public readonly CentrexTrunks $trunks;
    public readonly CentrexVoiceboxes $voiceboxes;
    public readonly CentrexWebhooks $webhooks;

    public function __construct(private Client $client)
    {
        $this->apiKeys = new CentrexApiKeys($client);
        $this->audio = new CentrexAudio($client);
        $this->cdr = new CentrexCdr($client);
        $this->conferences = new CentrexConferences($client);
        $this->destinations = new CentrexDestinations($client);
        $this->flows = new CentrexFlows($client);
        $this->ivr = new CentrexIvr($client);
        $this->live = new CentrexLive($client);
        $this->numbers = new CentrexNumbers($client);
        $this->queues = new CentrexQueues($client);
        $this->ringGroups = new CentrexRingGroups($client);
        $this->settings = new CentrexSettings($client);
        $this->stats = new CentrexStats($client);
        $this->status = new CentrexStatus($client);
        $this->timeConditions = new CentrexTimeConditions($client);
        $this->trunks = new CentrexTrunks($client);
        $this->voiceboxes = new CentrexVoiceboxes($client);
        $this->webhooks = new CentrexWebhooks($client);
    }

    /**
     * Active le standard hébergé (création des postes pour les utilisateurs, premier numéro interne).
     * Droits : Administrateur.
     * POST /api/centrex/enable
     */
    public function enable(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/enable', $body, $query);
    }

    /**
     * Lance un appel : le poste sonne, puis le numéro est composé.
     * Droits : Administrateur.
     * POST /api/centrex/originate
     */
    public function originate(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/originate', $body, $query);
    }
}
