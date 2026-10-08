<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Applications vocales : URL du webhook (dial plan en code), secours, fin d'appel, clé de signature. */
final class Applications extends Resource
{
    /** @return list<array<string, mixed>> */
    public function list(): array
    {
        return $this->client->request('GET', '/api/v1/applications');
    }

    /**
     * @param array{name: string, voiceUrl: string, fallbackUrl?: ?string, statusCallbackUrl?: ?string} $input
     * @return array<string, mixed> application, avec signingSecret
     */
    public function create(array $input): array
    {
        return $this->client->request('POST', '/api/v1/applications', $input);
    }

    /** @return array<string, mixed> */
    public function get(string $id): array
    {
        return $this->client->request('GET', '/api/v1/applications/' . self::id($id));
    }

    /** @param array<string, mixed> $input @return array<string, mixed> */
    public function update(string $id, array $input): array
    {
        return $this->client->request('PATCH', '/api/v1/applications/' . self::id($id), $input);
    }

    /** Nouvelle clé de signature (l'ancienne cesse de fonctionner). @return array<string, mixed> */
    public function rotateSecret(string $id): array
    {
        return $this->client->request('POST', '/api/v1/applications/' . self::id($id) . '/secret');
    }

    /** @return array<string, mixed> */
    public function delete(string $id): array
    {
        return $this->client->request('DELETE', '/api/v1/applications/' . self::id($id));
    }
}
