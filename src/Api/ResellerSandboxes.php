<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerSandboxes
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Vos revendeurs d’essai et leurs clients.
     * Droits : Revendeur.
     * GET /api/reseller/sandboxes
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/reseller/sandboxes', null, $query);
    }

    /**
     * Crée un revendeur d’essai avec deux clients fictifs équipés. Renvoie une seule fois la clé vxr_test_…, l’accès au panneau (e-mail, mot de passe) et la console d’essai.
     * Droits : Revendeur.
     * POST /api/reseller/sandboxes
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/sandboxes', $body, $query);
    }

    /**
     * Supprime un revendeur d’essai et ses clients.
     * Droits : Revendeur.
     * DELETE /api/reseller/sandboxes/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/sandboxes/' . rawurlencode($id), null, $query);
    }

    /**
     * Remet le revendeur d’essai à zéro (deux nouveaux clients fictifs) ; clé, panneau et console inchangés.
     * Droits : Revendeur.
     * POST /api/reseller/sandboxes/:id/reset
     */
    public function reset(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/reseller/sandboxes/' . rawurlencode($id) . '/reset', $body, $query);
    }
}
