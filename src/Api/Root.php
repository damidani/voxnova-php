<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Root
{
    public readonly Addons $addons;
    public readonly Ai $ai;
    public readonly Apps $apps;
    public readonly Auth $auth;
    public readonly Billing $billing;
    public readonly Calls $calls;
    public readonly Centrex $centrex;
    public readonly ConfigBackups $configBackups;
    public readonly Contacts $contacts;
    public readonly Devices $devices;
    public readonly Directory $directory;
    public readonly Integrations $integrations;
    public readonly Me $me;
    public readonly Media $media;
    public readonly Messages $messages;
    public readonly Music $music;
    public readonly Org $org;
    public readonly Porting $porting;
    public readonly Reseller $reseller;
    public readonly Satisfaction $satisfaction;
    public readonly Search $search;
    public readonly Services $services;
    public readonly Simple $simple;
    public readonly Support $support;
    public readonly V1 $v1;

    public function __construct(private Client $client)
    {
        $this->addons = new Addons($client);
        $this->ai = new Ai($client);
        $this->apps = new Apps($client);
        $this->auth = new Auth($client);
        $this->billing = new Billing($client);
        $this->calls = new Calls($client);
        $this->centrex = new Centrex($client);
        $this->configBackups = new ConfigBackups($client);
        $this->contacts = new Contacts($client);
        $this->devices = new Devices($client);
        $this->directory = new Directory($client);
        $this->integrations = new Integrations($client);
        $this->me = new Me($client);
        $this->media = new Media($client);
        $this->messages = new Messages($client);
        $this->music = new Music($client);
        $this->org = new Org($client);
        $this->porting = new Porting($client);
        $this->reseller = new Reseller($client);
        $this->satisfaction = new Satisfaction($client);
        $this->search = new Search($client);
        $this->services = new Services($client);
        $this->simple = new Simple($client);
        $this->support = new Support($client);
        $this->v1 = new V1($client);
    }

}
