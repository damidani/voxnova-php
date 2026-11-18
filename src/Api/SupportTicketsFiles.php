<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class SupportTicketsFiles
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Télécharge une pièce jointe.
     * Droits : Utilisateur.
     * GET /api/support/tickets/:id/files/:msg/:file
     */
    public function get(string $id, string $msg, string $file, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/support/tickets/' . rawurlencode($id) . '/files/' . rawurlencode($msg) . '/' . rawurlencode($file), null, $query);
    }
}
