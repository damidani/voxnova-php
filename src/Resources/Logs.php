<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Journal des requêtes webhook (7 jours) : requête, réponse, code HTTP, durée, erreurs. */
final class Logs extends Resource
{
    /** @return array{items: list<array<string, mixed>>, total: int, page: int} */
    public function list(?string $callId = null, ?string $applicationId = null, bool $errorsOnly = false, int $page = 1, int $pageSize = 25): array
    {
        return $this->client->request('GET', '/api/v1/logs', null, ['callId' => $callId, 'applicationId' => $applicationId, 'errors' => $errorsOnly ? true : null, 'page' => $page, 'pageSize' => $pageSize]);
    }
}
