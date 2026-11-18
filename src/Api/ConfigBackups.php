<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ConfigBackups
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Sauvegardes de configuration.
     * Droits : Administrateur.
     * GET /api/config-backups
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/config-backups', null, $query);
    }

    /**
     * Crée une sauvegarde.
     * Droits : Administrateur.
     * POST /api/config-backups
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/config-backups', $body, $query);
    }

    /**
     * Supprime une sauvegarde.
     * Droits : Administrateur.
     * DELETE /api/config-backups/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/config-backups/' . rawurlencode($id), null, $query);
    }

    /**
     * Télécharge une sauvegarde de configuration.
     * Droits : Administrateur.
     * GET /api/config-backups/:id/download
     */
    public function getDownload(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/config-backups/' . rawurlencode($id) . '/download', null, $query);
    }

    /**
     * Restauration : une sauvegarde automatique de l'état actuel est faite juste avant.
     * Droits : Administrateur.
     * POST /api/config-backups/:id/restore
     */
    public function restore(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/config-backups/' . rawurlencode($id) . '/restore', $body, $query);
    }

    /**
     * Fichier .hcfg déposé : vérifié, conservé dans l'espace, résumé renvoyé (l'import se fait ensuite).
     * Droits : Administrateur.
     * POST /api/config-backups/upload
     */
    public function upload(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/config-backups/upload', $body, $query, true);
    }
}
