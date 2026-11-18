<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class OrgKycDocuments
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Ajoute une pièce justificative (multipart : champs kind et file ; PDF, PNG, JPEG ; 10 Mo).
     * Droits : Administrateur.
     * POST /api/org/kyc/documents
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/org/kyc/documents', $body, $query, true);
    }

    /**
     * Retire une pièce justificative.
     * Droits : Administrateur.
     * DELETE /api/org/kyc/documents/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/org/kyc/documents/' . rawurlencode($id), null, $query);
    }
}
