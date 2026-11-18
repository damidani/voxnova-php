<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgSipTrunks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Trunks SIP de la plateforme.
     * Droits : Administrateur.
     * GET /api/org/sip-trunks
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/sip-trunks', null, $query);
    }

    /**
     * Réglages modifiables par le client : adresses de son PBX, numéro de secours, libellés des numéros.
     * Droits : Administrateur.
     * PATCH /api/org/sip-trunks/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/org/sip-trunks/' . rawurlencode($id), $body, $query);
    }

    /**
     * Numéros présentables (pour le PBX du client).
     * Droits : Administrateur.
     * GET /api/org/sip-trunks/:id/numbers
     */
    public function getNumbers(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/org/sip-trunks/' . rawurlencode($id) . '/numbers', null, $query);
    }

    /**
     * Génère un nouveau mot de passe pour le trunk SIP (affiché une seule fois).
     * Droits : Administrateur.
     * POST /api/org/sip-trunks/:id/password
     */
    public function password(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/sip-trunks/' . rawurlencode($id) . '/password', $body, $query);
    }
}
