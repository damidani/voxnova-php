<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Media
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Lecture en continu par lien signé (balise <audio>) : pas de session nécessaire, lien de quelques minutes.
     * Droits : Administrateur.
     * GET /api/media
     */
    public function get(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/media', null, $query);
    }
}
