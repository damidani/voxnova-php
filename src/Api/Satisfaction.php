<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Satisfaction
{
    public readonly SatisfactionExportCsv $exportCsv;
    public readonly SatisfactionReport $report;
    public readonly SatisfactionSurveys $surveys;

    public function __construct(private Client $client)
    {
        $this->exportCsv = new SatisfactionExportCsv($client);
        $this->report = new SatisfactionReport($client);
        $this->surveys = new SatisfactionSurveys($client);
    }

    /**
     * Résultats des enquêtes de satisfaction.
     * Droits : Administrateur.
     * GET /api/satisfaction
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/satisfaction', null, $query);
    }
}
