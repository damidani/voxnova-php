<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class V1Porting
{
    public readonly V1PortingFiles $files;
    public readonly V1PortingConfig $config;
    public readonly V1PortingOperator $operator;

    public function __construct(private Client $client)
    {
        $this->files = new V1PortingFiles($client);
        $this->config = new V1PortingConfig($client);
        $this->operator = new V1PortingOperator($client);
    }

    /**
     * Demandes de portabilité (filtres : status, number)
     * GET /api/v1/porting
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/porting', null, $query);
    }

    /**
     * Demander la portabilité de numéros (JSON avec documents en base64, ou multipart : champ data + fichiers)
     * POST /api/v1/porting
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/porting', $body, $query);
    }

    /**
     * Une demande : état, historique, documents
     * GET /api/v1/porting/:id
     */
    public function get(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/porting/' . rawurlencode($id), null, $query);
    }

    /**
     * Annuler une demande (états : mandat à signer, reçue, en cours ; plus possible une fois la date de portage fixée)
     * POST /api/v1/porting/:id/cancel
     */
    public function cancel(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/v1/porting/' . rawurlencode($id) . '/cancel', $body, $query);
    }

    /**
     * Lien de signature du mandat (état AWAITING_SIGNATURE)
     * GET /api/v1/porting/:id/sign
     */
    public function getSign(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/v1/porting/' . rawurlencode($id) . '/sign', null, $query);
    }
}
