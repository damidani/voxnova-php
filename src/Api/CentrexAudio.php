<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class CentrexAudio
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Fichiers audio (annonces, musiques).
     * Droits : Administrateur.
     * GET /api/centrex/audio
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/audio', null, $query);
    }

    /**
     * Crée un fichier audio.
     * Droits : Administrateur.
     * POST /api/centrex/audio
     */
    public function create(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/audio', $body, $query, true);
    }

    /**
     * Supprime un fichier audio.
     * Droits : Administrateur.
     * DELETE /api/centrex/audio/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/centrex/audio/' . rawurlencode($id), null, $query);
    }

    /**
     * Télécharge un fichier audio.
     * Droits : Administrateur.
     * GET /api/centrex/audio/:id/file
     */
    public function getFile(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/audio/' . rawurlencode($id) . '/file', null, $query);
    }

    /**
     * Écoute d'un flux radio dans le navigateur (jeton en paramètre : balise <audio>).
     * Droits : Administrateur.
     * GET /api/centrex/audio/:id/listen
     */
    public function getListen(string $id, array $query = []): mixed
    {
        return $this->client->request('GET', '/api/centrex/audio/' . rawurlencode($id) . '/listen', null, $query);
    }

    /**
     * Flux radio (Icecast, Shoutcast, MP3, AAC, HLS) utilisé comme musique d'attente.
     * Droits : Administrateur.
     * POST /api/centrex/audio/stream
     */
    public function stream(array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/centrex/audio/stream', $body, $query);
    }
}
