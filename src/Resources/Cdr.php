<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Journal des appels. */
final class Cdr extends Resource
{
    /** @return array{items: list<array<string, mixed>>, total: int, page: int} */
    public function list(int $page = 1, int $pageSize = 25, ?string $since = null): array
    {
        return $this->client->request('GET', '/api/v1/cdr', null, ['page' => $page, 'pageSize' => $pageSize, 'since' => $since]);
    }
}
