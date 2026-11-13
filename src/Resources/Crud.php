<?php

declare(strict_types=1);

namespace VoxNova\Resources;

use VoxNova\Client;

/** Ressource du panneau (utilisateurs, postes, files d'attente, groupes d'appel, serveurs vocaux…) : liste, création, modification, suppression. */
final class Crud extends Resource
{
    public function __construct(Client $client, private string $base, private string $updateMethod = 'PUT')
    {
        parent::__construct($client);
    }

    /** @return list<array<string, mixed>> */
    public function list(): array
    {
        return $this->client->request('GET', $this->base);
    }

    /** @param array<string, mixed> $data @return array<string, mixed> */
    public function create(array $data): array
    {
        return $this->client->request('POST', $this->base, $data);
    }

    /** @param array<string, mixed> $data @return array<string, mixed> */
    public function update(string $id, array $data): array
    {
        return $this->client->request($this->updateMethod, $this->base . '/' . self::id($id), $data);
    }

    /** @return array<string, mixed> */
    public function delete(string $id): array
    {
        return $this->client->request('DELETE', $this->base . '/' . self::id($id));
    }
}
