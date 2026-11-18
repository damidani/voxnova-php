<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Org
{
    public readonly OrgAudit $audit;
    public readonly OrgCallbackBlocks $callbackBlocks;
    public readonly OrgCallbackWidgets $callbackWidgets;
    public readonly OrgCallbacks $callbacks;
    public readonly OrgCalls $calls;
    public readonly OrgDevices $devices;
    public readonly OrgDomain $domain;
    public readonly OrgExtensions $extensions;
    public readonly OrgFeatures $features;
    public readonly OrgKyc $kyc;
    public readonly OrgLabel $label;
    public readonly OrgMessaging $messaging;
    public readonly OrgOnboarding $onboarding;
    public readonly OrgOverview $overview;
    public readonly OrgPermissions $permissions;
    public readonly OrgPhonebook $phonebook;
    public readonly OrgPhones $phones;
    public readonly OrgProvisionedPhones $provisionedPhones;
    public readonly OrgProvisioning $provisioning;
    public readonly OrgReceptionist $receptionist;
    public readonly OrgReferral $referral;
    public readonly OrgRingtone $ringtone;
    public readonly OrgRio $rio;
    public readonly OrgSandboxes $sandboxes;
    public readonly OrgSipServers $sipServers;
    public readonly OrgSipTrunks $sipTrunks;
    public readonly OrgSms $sms;
    public readonly OrgSpecials $specials;
    public readonly OrgTeams $teams;
    public readonly OrgTelecom $telecom;
    public readonly OrgTrial $trial;
    public readonly OrgTroubleshoot $troubleshoot;
    public readonly OrgUsers $users;

    public function __construct(private Client $client)
    {
        $this->audit = new OrgAudit($client);
        $this->callbackBlocks = new OrgCallbackBlocks($client);
        $this->callbackWidgets = new OrgCallbackWidgets($client);
        $this->callbacks = new OrgCallbacks($client);
        $this->calls = new OrgCalls($client);
        $this->devices = new OrgDevices($client);
        $this->domain = new OrgDomain($client);
        $this->extensions = new OrgExtensions($client);
        $this->features = new OrgFeatures($client);
        $this->kyc = new OrgKyc($client);
        $this->label = new OrgLabel($client);
        $this->messaging = new OrgMessaging($client);
        $this->onboarding = new OrgOnboarding($client);
        $this->overview = new OrgOverview($client);
        $this->permissions = new OrgPermissions($client);
        $this->phonebook = new OrgPhonebook($client);
        $this->phones = new OrgPhones($client);
        $this->provisionedPhones = new OrgProvisionedPhones($client);
        $this->provisioning = new OrgProvisioning($client);
        $this->receptionist = new OrgReceptionist($client);
        $this->referral = new OrgReferral($client);
        $this->ringtone = new OrgRingtone($client);
        $this->rio = new OrgRio($client);
        $this->sandboxes = new OrgSandboxes($client);
        $this->sipServers = new OrgSipServers($client);
        $this->sipTrunks = new OrgSipTrunks($client);
        $this->sms = new OrgSms($client);
        $this->specials = new OrgSpecials($client);
        $this->teams = new OrgTeams($client);
        $this->telecom = new OrgTelecom($client);
        $this->trial = new OrgTrial($client);
        $this->troubleshoot = new OrgTroubleshoot($client);
        $this->users = new OrgUsers($client);
    }

    /**
     * Modifie la fiche de l’entreprise (nom, adresse, e-mail de facturation, SIRET…).
     * Droits : Administrateur.
     * PATCH /api/org
     */
    public function update(array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/org', $body, $query);
    }

    /**
     * Passe du mode simple au mode avancé (ou l’inverse).
     * Droits : Administrateur.
     * POST /api/org/mode
     */
    public function mode(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/mode', $body, $query);
    }

    /**
     * Change le type de service (standard hébergé, relais vers votre PBX, trunk, plateforme développeurs).
     * Droits : Administrateur.
     * POST /api/org/product
     */
    public function product(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/product', $body, $query);
    }
}
