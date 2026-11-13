<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Webhooks de l'entreprise (call.completed, sms.status), signés : voir Webhook::verifyEvent(). */
final class Webhooks extends Resource
{
    /** @return list<array<string, mixed>> */
    public function list(): array
    {
        return $this->client->request('GET', '/api/v1/webhooks');
    }

    /**
     * Le secret de signature n'est renvoyé qu'à la création.
     * @param list<'call.completed'|'sms.status'|'porting.status'> $events
     * @return array<string, mixed>
     */
    public function create(string $url, array $events = ['sms.status']): array
    {
        return $this->client->request('POST', '/api/v1/webhooks', ['url' => $url, 'events' => $events]);
    }

    /** @param array<string, mixed> $changes @return array<string, mixed> */
    public function update(string $id, array $changes): array
    {
        return $this->client->request('PATCH', '/api/v1/webhooks/' . self::id($id), $changes);
    }

    /** @return array<string, mixed> */
    public function delete(string $id): array
    {
        return $this->client->request('DELETE', '/api/v1/webhooks/' . self::id($id));
    }
}
