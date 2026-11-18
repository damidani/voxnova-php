<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1
{
    public readonly V1Account $account;
    public readonly V1Applications $applications;
    public readonly V1Audio $audio;
    public readonly V1Callbacks $callbacks;
    public readonly V1Calls $calls;
    public readonly V1Cdr $cdr;
    public readonly V1ClickToCall $clickToCall;
    public readonly V1Endpoints $endpoints;
    public readonly V1Extensions $extensions;
    public readonly V1Logs $logs;
    public readonly V1Numbers $numbers;
    public readonly V1Porting $porting;
    public readonly V1Recordings $recordings;
    public readonly V1Sms $sms;
    public readonly V1Usage $usage;
    public readonly V1Voicemail $voicemail;
    public readonly V1Webhooks $webhooks;

    public function __construct(private Client $client)
    {
        $this->account = new V1Account($client);
        $this->applications = new V1Applications($client);
        $this->audio = new V1Audio($client);
        $this->callbacks = new V1Callbacks($client);
        $this->calls = new V1Calls($client);
        $this->cdr = new V1Cdr($client);
        $this->clickToCall = new V1ClickToCall($client);
        $this->endpoints = new V1Endpoints($client);
        $this->extensions = new V1Extensions($client);
        $this->logs = new V1Logs($client);
        $this->numbers = new V1Numbers($client);
        $this->porting = new V1Porting($client);
        $this->recordings = new V1Recordings($client);
        $this->sms = new V1Sms($client);
        $this->usage = new V1Usage($client);
        $this->voicemail = new V1Voicemail($client);
        $this->webhooks = new V1Webhooks($client);
    }

    /**
     * Lien de connexion automatique au panneau de votre entreprise (usage unique, 60 s)
     * Avec l’en-tête X-Organization : au nom du client.
     * POST /api/v1/login-links
     */
    public function loginLinks(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/login-links', $body, $query);
    }
}
