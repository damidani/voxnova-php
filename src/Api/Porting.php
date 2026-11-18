<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Porting
{
    public readonly PortingFiles $files;
    public readonly PortingConfig $config;
    public readonly PortingOperator $operator;

    public function __construct(private Client $client)
    {
        $this->files = new PortingFiles($client);
        $this->config = new PortingConfig($client);
        $this->operator = new PortingOperator($client);
    }

    /**
     * Demandes de portabilité de l’entreprise.
     * Droits : Administrateur.
     * GET /api/porting
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/porting', null, $query);
    }

    /**
     * Nouvelle demande : formulaire (champ « data », JSON) + documents (facture, mandat signé ; PDF ou image, 10 Mo).
     * Droits : Administrateur.
     * POST /api/porting
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/porting', $body, $query, true);
    }

    /**
     * Annule une demande de portabilité (avant la date fixée).
     * Droits : Administrateur.
     * POST /api/porting/:id/cancel
     */
    public function cancel(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/porting/' . rawurlencode($id) . '/cancel', $body, $query);
    }

    /**
     * Retour du client après signature : état vérifié tout de suite (sans attendre le webhook).
     * Droits : Administrateur.
     * POST /api/porting/:id/check-signature
     */
    public function checkSignature(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/porting/' . rawurlencode($id) . '/check-signature', $body, $query);
    }

    /**
     * Lien de signature du mandat (reprise d'une signature commencée).
     * Droits : Administrateur.
     * GET /api/porting/:id/sign
     */
    public function getSign(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/porting/' . rawurlencode($id) . '/sign', null, $query);
    }
}
