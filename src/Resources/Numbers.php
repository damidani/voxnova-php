<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Numéros : stock disponible, achat, routage, résiliation. */
final class Numbers extends Resource
{
    /** @return list<array<string, mixed>> */
    public function list(): array
    {
        return $this->client->request('GET', '/api/v1/numbers');
    }

    /** @return list<array{number: string, monthlyPriceCents: int}> */
    public function available(?string $contains = null, int $limit = 20): array
    {
        return $this->client->request('GET', '/api/v1/numbers/available', null, ['contains' => $contains, 'limit' => $limit]);
    }

    /** @return array<string, mixed> */
    public function buy(string $number, ?string $applicationId = null, ?string $label = null): array
    {
        return $this->client->request('POST', '/api/v1/numbers', array_filter(['number' => $number, 'applicationId' => $applicationId, 'label' => $label], static fn ($v) => $v !== null));
    }

    /**
     * Relie le numéro à une application ou un endpoint (null pour détacher).
     * @param array{applicationId?: ?string, endpointId?: ?string, label?: string} $to
     * @return array<string, mixed>
     */
    public function route(string $number, array $to): array
    {
        return $this->client->request('PATCH', '/api/v1/numbers/' . self::id($number), $to);
    }

    /** Résiliation : le numéro retourne dans le stock. @return array<string, mixed> */
    public function release(string $number): array
    {
        return $this->client->request('DELETE', '/api/v1/numbers/' . self::id($number));
    }
}
