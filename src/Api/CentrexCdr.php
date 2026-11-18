<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexCdr
{
    public readonly CentrexCdrExportCsv $exportCsv;

    public function __construct(private Client $client)
    {
        $this->exportCsv = new CentrexCdrExportCsv($client);
    }

    /**
     * Journal détaillé des appels (filtres : dates, poste, sens, numéro, appels manqués), avec enregistrements.
     * Droits : Administrateur.
     * GET /api/centrex/cdr
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/cdr', null, $query);
    }

    /**
     * Écoute d'un enregistrement : lien de lecture signé (quelques minutes), sans téléchargement (RGPD).
     * Droits : Administrateur.
     * POST /api/centrex/cdr/:id/listen
     */
    public function listen(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/cdr/' . rawurlencode($id) . '/listen', $body, $query);
    }

    /**
     * Supprime l’enregistrement d’un appel.
     * Droits : Administrateur.
     * DELETE /api/centrex/cdr/:id/recording
     */
    public function deleteRecording(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/cdr/' . rawurlencode($id) . '/recording', null, $query);
    }
}
