<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Me
{
    public readonly Me_2fa $_2fa;
    public readonly MeAi $ai;
    public readonly MeCallContext $callContext;
    public readonly MeCalls $calls;
    public readonly MeCentrex $centrex;
    public readonly MeClickToCall $clickToCall;
    public readonly MeLoginCards $loginCards;
    public readonly MePasskeys $passkeys;
    public readonly MePresence $presence;
    public readonly MeQueues $queues;
    public readonly MeRingtone $ringtone;
    public readonly MeSipAccounts $sipAccounts;
    public readonly MeSoftphone $softphone;
    public readonly MeVoiceboxes $voiceboxes;
    public readonly MeVoicemail $voicemail;

    public function __construct(private Client $client)
    {
        $this->_2fa = new Me_2fa($client);
        $this->ai = new MeAi($client);
        $this->callContext = new MeCallContext($client);
        $this->calls = new MeCalls($client);
        $this->centrex = new MeCentrex($client);
        $this->clickToCall = new MeClickToCall($client);
        $this->loginCards = new MeLoginCards($client);
        $this->passkeys = new MePasskeys($client);
        $this->presence = new MePresence($client);
        $this->queues = new MeQueues($client);
        $this->ringtone = new MeRingtone($client);
        $this->sipAccounts = new MeSipAccounts($client);
        $this->softphone = new MeSoftphone($client);
        $this->voiceboxes = new MeVoiceboxes($client);
        $this->voicemail = new MeVoicemail($client);
    }

    /**
     * QR code de connexion d'une application mobile/bureau (valable 15 minutes, usage unique).
     * Droits : Utilisateur.
     * POST /api/me/provisioning
     */
    public function provisioning(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/provisioning', $body, $query);
    }
}
