<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenter
{
    public readonly AppsCallcenterCallbacks $callbacks;
    public readonly AppsCallcenterCampaigns $campaigns;
    public readonly AppsCallcenterContacts $contacts;
    public readonly AppsCallcenterDispositions $dispositions;
    public readonly AppsCallcenterLookup $lookup;
    public readonly AppsCallcenterMe $me;
    public readonly AppsCallcenterOverview $overview;
    public readonly AppsCallcenterPauseReasons $pauseReasons;

    public function __construct(private Client $client)
    {
        $this->callbacks = new AppsCallcenterCallbacks($client);
        $this->campaigns = new AppsCallcenterCampaigns($client);
        $this->contacts = new AppsCallcenterContacts($client);
        $this->dispositions = new AppsCallcenterDispositions($client);
        $this->lookup = new AppsCallcenterLookup($client);
        $this->me = new AppsCallcenterMe($client);
        $this->overview = new AppsCallcenterOverview($client);
        $this->pauseReasons = new AppsCallcenterPauseReasons($client);
    }

    /**
     * Qualification de l'appel (après chaque appel) ; met à jour la campagne et programme un rappel.
     * Droits : Utilisateur.
     * POST /api/apps/callcenter/logs
     */
    public function logs(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/callcenter/logs', $body, $query);
    }
}
