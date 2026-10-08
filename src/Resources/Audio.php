<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Fichiers audio utilisables avec play(['audioId' => …]). */
final class Audio extends Resource
{
    /** @return list<array<string, mixed>> */
    public function list(): array
    {
        return $this->client->request('GET', '/api/v1/audio');
    }

    /** Envoie un fichier (MP3, WAV, AAC, M4A, OGG…), converti par la plateforme. @return array{id: string, name: string, durationSec: float} */
    public function upload(string $path, ?string $name = null): array
    {
        if (!is_file($path)) {
            throw new \InvalidArgumentException("Fichier introuvable : $path");
        }
        return $this->client->request('POST', '/api/v1/audio', ['name' => $name ?? basename($path), 'file' => new \CURLFile($path)], [], true);
    }
}
