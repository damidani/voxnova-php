<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Appels : appel programmable, appels en cours, raccrocher, reprendre la main. */
final class Calls extends Resource
{
    /**
     * Appelle un endpoint ou un numéro ; au décroché, l'application prend la main (direction « api »).
     * @param array{to: string, applicationId: string, from?: string, url?: string, timeout?: int, vars?: array<string, scalar>} $input
     * @return array{callId: string, status: string}
     */
    public function create(array $input): array
    {
        return $this->client->request('POST', '/api/v1/calls', $input);
    }

    /** @return array<string, mixed> */
    public function live(): array
    {
        return $this->client->request('GET', '/api/v1/calls');
    }

    /** @return array<string, mixed> status « in-progress » ou « completed » */
    public function get(string $callId): array
    {
        return $this->client->request('GET', '/api/v1/calls/' . self::id($callId));
    }

    /** @return array<string, mixed> */
    public function hangup(string $callId): array
    {
        return $this->client->request('POST', '/api/v1/calls/' . self::id($callId) . '/hangup');
    }

    /** L'URL reçoit l'événement « redirect » et renvoie de nouvelles instructions. @return array<string, mixed> */
    public function redirect(string $callId, ?string $url = null, ?string $applicationId = null): array
    {
        return $this->client->request('POST', '/api/v1/calls/' . self::id($callId) . '/redirect', array_filter(['url' => $url, 'applicationId' => $applicationId], static fn ($v) => $v !== null));
    }
}
