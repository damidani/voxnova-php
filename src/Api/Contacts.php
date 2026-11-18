<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Contacts
{
    public readonly ContactsExportCsv $exportCsv;
    public readonly ContactsLookup $lookup;

    public function __construct(private Client $client)
    {
        $this->exportCsv = new ContactsExportCsv($client);
        $this->lookup = new ContactsLookup($client);
    }

    /**
     * Contacts.
     * Droits : Utilisateur.
     * GET /api/contacts
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/contacts', null, $query);
    }

    /**
     * Crée un contact.
     * Droits : Utilisateur.
     * POST /api/contacts
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/contacts', $body, $query);
    }

    /**
     * Modifie un contact.
     * Droits : Utilisateur. Modification partielle : seuls les champs envoyés sont modifiés.
     * PUT /api/contacts/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/contacts/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime un contact.
     * Droits : Administrateur.
     * DELETE /api/contacts/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/contacts/' . rawurlencode($id), null, $query);
    }

    /**
     * Appels passés et reçus avec un contact : historique de l'utilisateur, et journal de l'entreprise pour les administrateurs.
     * Droits : Utilisateur.
     * GET /api/contacts/:id/calls
     */
    public function getCalls(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/contacts/' . rawurlencode($id) . '/calls', null, $query);
    }

    /**
     * Import CSV : colonnes reconnues prénom, nom, société, fonction, email, téléphone, mobile.
     * Droits : Utilisateur.
     * POST /api/contacts/import
     */
    public function import(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/contacts/import', $body, $query);
    }
}
