<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeClickToCall
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Appelle un numéro depuis son poste (le poste sonne puis le numéro est composé).
     * Droits : Utilisateur.
     * POST /api/me/click-to-call
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/click-to-call', $body, $query);
    }

    /**
     * État d’un appel lancé (sonnerie, numérotation, en cours, terminé).
     * Droits : Administrateur.
     * GET /api/me/click-to-call/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/click-to-call/' . rawurlencode($id), null, $query);
    }

    /**
     * Raccroche un appel lancé.
     * Droits : Administrateur.
     * DELETE /api/me/click-to-call/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/me/click-to-call/' . rawurlencode($id), null, $query);
    }
}
