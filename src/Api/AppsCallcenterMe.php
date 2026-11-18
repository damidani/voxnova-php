<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsCallcenterMe
{

    public function __construct(private Client $client)
    {
    }

    /**
     * État de l’agent connecté : statut, pause, appel en cours, rappels à faire.
     * Droits : Utilisateur.
     * GET /api/apps/callcenter/me
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/callcenter/me', null, $query);
    }

    /**
     * Change le statut de l’agent : disponible, en pause (avec motif), déconnecté.
     * Droits : Utilisateur.
     * POST /api/apps/callcenter/me/status
     */
    public function status(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/callcenter/me/status', $body, $query);
    }
}
