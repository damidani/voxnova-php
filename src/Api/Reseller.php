<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Reseller
{
    public readonly ResellerApiKeys $apiKeys;
    public readonly ResellerBillingProfile $billingProfile;
    public readonly ResellerBranding $branding;
    public readonly ResellerCatalog $catalog;
    public readonly ResellerClients $clients;
    public readonly ResellerDomainCheck $domainCheck;
    public readonly ResellerFeatures $features;
    public readonly ResellerInvoices $invoices;
    public readonly ResellerMe $me;
    public readonly ResellerPayment $payment;
    public readonly ResellerPlans $plans;
    public readonly ResellerPortal $portal;
    public readonly ResellerPreferences $preferences;
    public readonly ResellerSandboxes $sandboxes;
    public readonly ResellerSms $sms;
    public readonly ResellerStatements $statements;
    public readonly ResellerSystemAudio $systemAudio;
    public readonly ResellerSystemAudios $systemAudios;
    public readonly ResellerTeam $team;
    public readonly ResellerTroubleshoot $troubleshoot;
    public readonly ResellerWebhooks $webhooks;

    public function __construct(private Client $client)
    {
        $this->apiKeys = new ResellerApiKeys($client);
        $this->billingProfile = new ResellerBillingProfile($client);
        $this->branding = new ResellerBranding($client);
        $this->catalog = new ResellerCatalog($client);
        $this->clients = new ResellerClients($client);
        $this->domainCheck = new ResellerDomainCheck($client);
        $this->features = new ResellerFeatures($client);
        $this->invoices = new ResellerInvoices($client);
        $this->me = new ResellerMe($client);
        $this->payment = new ResellerPayment($client);
        $this->plans = new ResellerPlans($client);
        $this->portal = new ResellerPortal($client);
        $this->preferences = new ResellerPreferences($client);
        $this->sandboxes = new ResellerSandboxes($client);
        $this->sms = new ResellerSms($client);
        $this->statements = new ResellerStatements($client);
        $this->systemAudio = new ResellerSystemAudio($client);
        $this->systemAudios = new ResellerSystemAudios($client);
        $this->team = new ResellerTeam($client);
        $this->troubleshoot = new ResellerTroubleshoot($client);
        $this->webhooks = new ResellerWebhooks($client);
    }

}
