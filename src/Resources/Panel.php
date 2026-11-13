<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Toute route du panneau d'une entreprise (clé revendeur + forOrganization()) : voir la documentation Swagger. */
final class Panel extends Resource
{
    /** @param array<string, scalar|null> $query @return mixed */
    public function get(string $path, array $query = []): mixed
    {
        return $this->client->request('GET', $path, null, $query);
    }

    /** @param array<string, mixed> $body @return mixed */
    public function post(string $path, array $body = []): mixed
    {
        return $this->client->request('POST', $path, $body);
    }

    /** @param array<string, mixed> $body @return mixed */
    public function put(string $path, array $body = []): mixed
    {
        return $this->client->request('PUT', $path, $body);
    }

    /** @param array<string, mixed> $body @return mixed */
    public function patch(string $path, array $body = []): mixed
    {
        return $this->client->request('PATCH', $path, $body);
    }

    /** @return mixed */
    public function delete(string $path): mixed
    {
        return $this->client->request('DELETE', $path);
    }
}
