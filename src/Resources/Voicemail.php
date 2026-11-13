<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Messagerie vocale : boîtes, messages (transcription si option IA), lien d'écoute signé, lu / non lu, suppression (webhook voicemail.new). */
final class Voicemail extends Resource
{
    /** @return array{boxes: list<array<string, mixed>>, unread: int} */
    public function list(?string $extension = null, ?bool $unread = null): array
    {
        return $this->client->request('GET', '/api/v1/voicemail', null, ['extension' => $extension, 'unread' => $unread]);
    }

    /** @return array<string, mixed> */
    public function get(string $extension, string $uuid): array
    {
        return $this->client->request('GET', '/api/v1/voicemail/' . self::id($extension) . '/' . self::id($uuid));
    }

    /** Lien d'écoute (5 minutes) ; marque le message lu. @return array{url: string, expiresIn: int} */
    public function listenUrl(string $extension, string $uuid): array
    {
        return $this->client->request('POST', '/api/v1/voicemail/' . self::id($extension) . '/' . self::id($uuid) . '/url', []);
    }

    /** @return array<string, mixed> */
    public function markRead(string $extension, string $uuid, bool $read = true): array
    {
        return $this->client->request('POST', '/api/v1/voicemail/' . self::id($extension) . '/' . self::id($uuid) . '/read', ['read' => $read]);
    }

    /** @return array<string, mixed> */
    public function delete(string $extension, string $uuid): array
    {
        return $this->client->request('DELETE', '/api/v1/voicemail/' . self::id($extension) . '/' . self::id($uuid));
    }
}
