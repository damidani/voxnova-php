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

    /**
     * Clic pour appeler : le poste sonne, puis le numéro est appelé au décroché.
     * @param array{to: string, extension?: string, user?: string, autoAnswer?: bool, label?: string} $input
     * @return array{callId: string, status: string, extension: string, to: string}
     */
    public function clickToCall(array $input): array
    {
        return $this->client->request('POST', '/api/v1/click-to-call', $input);
    }

    /** État : ringing, dialing, in_progress, completed, not_answered, failed. @return array<string, mixed> */
    public function clickToCallStatus(string $callId): array
    {
        return $this->client->request('GET', '/api/v1/click-to-call/' . self::id($callId));
    }

    /** @return array{callId: string, cancelled: bool} */
    public function cancelClickToCall(string $callId): array
    {
        return $this->client->request('DELETE', '/api/v1/click-to-call/' . self::id($callId));
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
