<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Enregistrements (instruction « record ») : ils restent sur la plateforme, écoute par lien signé. */
final class Recordings extends Resource
{
    /** @return array{items: list<array<string, mixed>>, total: int, page: int} */
    public function list(?string $callId = null, int $page = 1, int $pageSize = 25): array
    {
        return $this->client->request('GET', '/api/v1/recordings', null, ['callId' => $callId, 'page' => $page, 'pageSize' => $pageSize]);
    }

    /** Lien d'écoute signé, valable 5 minutes. @return array{url: string, expiresIn: int} */
    public function url(string $id): array
    {
        return $this->client->request('POST', '/api/v1/recordings/' . self::id($id) . '/url');
    }

    /** @return array<string, mixed> */
    public function delete(string $id): array
    {
        return $this->client->request('DELETE', '/api/v1/recordings/' . self::id($id));
    }
}
