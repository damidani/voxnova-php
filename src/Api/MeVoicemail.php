<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeVoicemail
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Ses messages vocaux (tous ses postes).
     * Droits : Utilisateur.
     * GET /api/me/voicemail
     */
    public function list(array $query = []): mixed
    {
        return $this->client->request('GET', '/api/me/voicemail', null, $query);
    }

    /**
     * Supprime un de ses messages vocaux.
     * Droits : Utilisateur.
     * DELETE /api/me/voicemail/:ext/:uuid
     */
    public function delete(string $ext, string $uuid, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/me/voicemail/' . rawurlencode($ext) . '/' . rawurlencode($uuid), null, $query);
    }

    /**
     * Écoute : lien signé et message marqué lu.
     * Droits : Utilisateur.
     * POST /api/me/voicemail/:ext/:uuid/listen
     */
    public function listen(string $ext, string $uuid, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/voicemail/' . rawurlencode($ext) . '/' . rawurlencode($uuid) . '/listen', $body, $query);
    }

    /**
     * Marque un message vocal comme écouté.
     * Droits : Utilisateur.
     * POST /api/me/voicemail/:ext/:uuid/read
     */
    public function read(string $ext, string $uuid, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/voicemail/' . rawurlencode($ext) . '/' . rawurlencode($uuid) . '/read', $body, $query);
    }

    /**
     * Annonce personnelle : fichier (MP3, WAV, AAC, M4A…) ou enregistrement fait dans le navigateur (WebM / Ogg).
     * Droits : Utilisateur.
     * POST /api/me/voicemail/:ext/greeting
     */
    public function greeting(string $ext, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/voicemail/' . rawurlencode($ext) . '/greeting', $body, $query);
    }

    /**
     * Retour à l'annonce standard.
     * Droits : Utilisateur.
     * DELETE /api/me/voicemail/:ext/greeting
     */
    public function deleteGreeting(string $ext, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/me/voicemail/' . rawurlencode($ext) . '/greeting', null, $query);
    }

    /**
     * Écoute son annonce d’accueil (lien d’écoute de quelques minutes).
     * Droits : Utilisateur.
     * POST /api/me/voicemail/:ext/greeting/listen
     */
    public function greetingListen(string $ext, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/voicemail/' . rawurlencode($ext) . '/greeting/listen', $body, $query);
    }

    /**
     * Activation, code d'accès (consultation par *97 / *98), copie par courriel, délai avant la messagerie.
     * Droits : Utilisateur.
     * PUT /api/me/voicemail/:ext/settings
     */
    public function updateSettings(string $ext, array $body = [], array $query = []): mixed
    {
        return $this->client->request('PUT', '/api/me/voicemail/' . rawurlencode($ext) . '/settings', $body, $query);
    }
}
