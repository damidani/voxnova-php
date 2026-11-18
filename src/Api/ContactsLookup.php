<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ContactsLookup
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Recherche de l'appelant à partir d'un numéro (affichage du nom lors d'un appel entrant).
     * Droits : Utilisateur.
     * GET /api/contacts/lookup
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/contacts/lookup', null, $query);
    }
}
