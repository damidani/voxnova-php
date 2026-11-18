<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class SupportTickets
{
    public readonly SupportTicketsFiles $files;

    public function __construct(private Client $client)
    {
        $this->files = new SupportTicketsFiles($client);
    }

    /**
     * Tickets de support de l’entreprise.
     * Droits : Utilisateur.
     * GET /api/support/tickets
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/support/tickets', null, $query);
    }

    /**
     * Ouvre un ticket (multipart possible : pièce jointe dans file).
     * Droits : Utilisateur.
     * POST /api/support/tickets
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/support/tickets', $body, $query, true);
    }

    /**
     * Détail d’un ticket et ses messages.
     * Droits : Utilisateur.
     * GET /api/support/tickets/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/support/tickets/' . rawurlencode($id), null, $query);
    }

    /**
     * Ferme un ticket résolu (note de satisfaction facultative).
     * Droits : Utilisateur.
     * POST /api/support/tickets/:id/close
     */
    public function close(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/support/tickets/' . rawurlencode($id) . '/close', $body, $query);
    }

    /**
     * Répond dans un ticket.
     * Droits : Utilisateur.
     * POST /api/support/tickets/:id/reply
     */
    public function reply(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/support/tickets/' . rawurlencode($id) . '/reply', $body, $query);
    }
}
