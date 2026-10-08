<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Endpoints SIP : téléphones, softphones ou vos applications. Identifiant = id ou numéro interne. */
final class Endpoints extends Resource
{
    /** @return list<array<string, mixed>> avec « registered » */
    public function list(): array
    {
        return $this->client->request('GET', '/api/v1/endpoints');
    }

    /**
     * Options : name (requis), number, applicationId, password, voicemail, callerId, permission, recordCalls, enabled, forward.
     * @param array<string, mixed> $input
     * @return array<string, mixed> endpoint avec « sip » (server, port, domain, username, password…)
     */
    public function create(array $input): array
    {
        return $this->client->request('POST', '/api/v1/endpoints', $input);
    }

    /** @return array<string, mixed> avec identifiants SIP et appareils enregistrés */
    public function get(string $id): array
    {
        return $this->client->request('GET', '/api/v1/endpoints/' . self::id($id));
    }

    /** @param array<string, mixed> $input @return array<string, mixed> */
    public function update(string $id, array $input): array
    {
        return $this->client->request('PATCH', '/api/v1/endpoints/' . self::id($id), $input);
    }

    /** @return list<array<string, mixed>> */
    public function registrations(string $id): array
    {
        return $this->client->request('GET', '/api/v1/endpoints/' . self::id($id) . '/registrations');
    }

    /** Nouveau mot de passe SIP généré (les appareils sont déconnectés). @return array<string, mixed> */
    public function resetPassword(string $id): array
    {
        return $this->client->request('POST', '/api/v1/endpoints/' . self::id($id) . '/password');
    }

    /** @return array<string, mixed> */
    public function disconnect(string $id): array
    {
        return $this->client->request('POST', '/api/v1/endpoints/' . self::id($id) . '/disconnect');
    }

    /** @return array<string, mixed> */
    public function delete(string $id): array
    {
        return $this->client->request('DELETE', '/api/v1/endpoints/' . self::id($id));
    }
}
