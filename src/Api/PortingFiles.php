<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class PortingFiles
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Document joint (client propriétaire ou éditeur).
     * Droits : Administrateur.
     * GET /api/porting/:id/files/:index
     */
    public function get(string $id, string $index, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/porting/' . rawurlencode($id) . '/files/' . rawurlencode($index), null, $query);
    }
}
