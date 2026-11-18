<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class MeVoiceboxesMessages
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Supprime un message d’une messagerie partagée.
     * Droits : Utilisateur.
     * DELETE /api/me/voiceboxes/messages/:id
     */
    public function delete(string $id, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/me/voiceboxes/messages/' . rawurlencode($id), null, $query);
    }

    /**
     * Traité / à traiter, avec une note facultative (« rappelé, devis envoyé »).
     * Droits : Utilisateur.
     * POST /api/me/voiceboxes/messages/:id/handled
     */
    public function handled(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/voiceboxes/messages/' . rawurlencode($id) . '/handled', $body, $query);
    }

    /**
     * Écoute : lien signé de quelques minutes, écoute notée (qui et quand).
     * Droits : Utilisateur.
     * POST /api/me/voiceboxes/messages/:id/listen
     */
    public function listen(string $id, array $body = [], array $query = []): mixed
    {
        return $this->client->request('POST', '/api/me/voiceboxes/messages/' . rawurlencode($id) . '/listen', $body, $query);
    }
}
