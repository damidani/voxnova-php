<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgTroubleshoot
{
    public readonly OrgTroubleshootTargets $targets;

    public function __construct(private Client $client)
    {
        $this->targets = new OrgTroubleshootTargets($client);
    }

    /**
     * Diagnostic : postes, enregistrements, numéros, derniers appels en échec.
     * Droits : Administrateur.
     * GET /api/org/troubleshoot
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/troubleshoot', null, $query);
    }

    /**
     * Lance un appel de test vers un poste ou un numéro.
     * Droits : Administrateur.
     * POST /api/org/troubleshoot/call
     */
    public function call(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/troubleshoot/call', $body, $query);
    }

    /**
     * Ouvre un ticket de support avec le diagnostic joint.
     * Droits : Administrateur.
     * POST /api/org/troubleshoot/ticket
     */
    public function ticket(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/troubleshoot/ticket', $body, $query);
    }
}
