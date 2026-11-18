<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Music
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Catalogue de musiques d’attente libres de droits.
     * Droits : Administrateur.
     * GET /api/music
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/music', null, $query);
    }

    /**
     * Acquisition : gratuite, ou achat unique (facturé sur la prochaine facture télécom) ; copie dans les musiques.
     * Droits : Administrateur.
     * POST /api/music/:id/acquire
     */
    public function acquire(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/music/' . rawurlencode($id) . '/acquire', $body, $query);
    }

    /**
     * extrait (30 s) : écoute libre pour les utilisateurs connectés
     * Droits : Utilisateur.
     * GET /api/music/:id/preview
     */
    public function getPreview(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/music/' . rawurlencode($id) . '/preview', null, $query);
    }
}
