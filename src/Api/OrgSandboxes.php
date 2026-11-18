<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgSandboxes
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Vos entreprises d’essai.
     * Droits : Administrateur.
     * GET /api/org/sandboxes
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/sandboxes', null, $query);
    }

    /**
     * Crée une entreprise d’essai fictive (utilisateurs, postes, file d’attente, standard vocal, numéros fictifs) et renvoie sa clé d’API vxk_test_… (une seule fois) et l’adresse de sa console d’essai.
     * Droits : Administrateur.
     * POST /api/org/sandboxes
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/sandboxes', $body, $query);
    }

    /**
     * Supprime une entreprise d’essai et tout son contenu.
     * Droits : Administrateur.
     * DELETE /api/org/sandboxes/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/sandboxes/' . rawurlencode($id), null, $query);
    }

    /**
     * Lien de connexion (5 minutes) au panneau de l’entreprise d’essai.
     * Droits : Administrateur.
     * POST /api/org/sandboxes/:id/login-link
     */
    public function loginLink(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/sandboxes/' . rawurlencode($id) . '/login-link', $body, $query);
    }

    /**
     * Remet l’entreprise d’essai dans son état d’origine ; clé d’API et console inchangées.
     * Droits : Administrateur.
     * POST /api/org/sandboxes/:id/reset
     */
    public function reset(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/sandboxes/' . rawurlencode($id) . '/reset', $body, $query);
    }
}
