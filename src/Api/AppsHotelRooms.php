<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsHotelRooms
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Chambres.
     * Droits : Utilisateur.
     * GET /api/apps/hotel/rooms
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/hotel/rooms', null, $query);
    }

    /**
     * Crée une chambre.
     * Droits : Administrateur.
     * POST /api/apps/hotel/rooms
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/hotel/rooms', $body, $query);
    }

    /**
     * Modifie une chambre.
     * Droits : Utilisateur.
     * PATCH /api/apps/hotel/rooms/:id
     */
    public function update(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PATCH', '/api/apps/hotel/rooms/' . rawurlencode($id), $body, $query);
    }

    /**
     * Supprime une chambre.
     * Droits : Administrateur.
     * DELETE /api/apps/hotel/rooms/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/apps/hotel/rooms/' . rawurlencode($id), null, $query);
    }

    /**
     * Arrivée d’un client : la chambre est ouverte aux appels (droits d’appel, nom affiché).
     * Droits : Utilisateur.
     * POST /api/apps/hotel/rooms/:id/checkin
     */
    public function checkin(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/hotel/rooms/' . rawurlencode($id) . '/checkin', $body, $query);
    }

    /**
     * Départ : appels de la chambre bloqués, relevé des communications.
     * Droits : Utilisateur.
     * POST /api/apps/hotel/rooms/:id/checkout
     */
    public function checkout(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/hotel/rooms/' . rawurlencode($id) . '/checkout', $body, $query);
    }

    /**
     * Relevé des appels facturables de la chambre pendant le séjour.
     * Droits : Utilisateur.
     * GET /api/apps/hotel/rooms/:id/folio
     */
    public function getFolio(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/apps/hotel/rooms/' . rawurlencode($id) . '/folio', null, $query);
    }

    /**
     * Programme un réveil téléphonique pour la chambre.
     * Droits : Utilisateur.
     * POST /api/apps/hotel/rooms/:id/wakeups
     */
    public function wakeups(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/hotel/rooms/' . rawurlencode($id) . '/wakeups', $body, $query);
    }

    /**
     * Crée plusieurs chambres d’un coup (plage de numéros).
     * Droits : Administrateur.
     * POST /api/apps/hotel/rooms/bulk
     */
    public function bulk(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/apps/hotel/rooms/bulk', $body, $query);
    }
}
