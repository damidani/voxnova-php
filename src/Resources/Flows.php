<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Scénarios d'appel (flow) : graphe de blocs, validation, simulation. */
final class Flows extends Resource
{
    /** @return list<array<string, mixed>> */
    public function list(): array
    {
        return $this->client->request('GET', '/api/centrex/flows');
    }

    /** @return array<string, mixed> */
    public function get(string $id): array
    {
        return $this->client->request('GET', '/api/centrex/flows/' . self::id($id));
    }

    /** @param array{name: string, graph: array<string, mixed>, number?: ?string, description?: string, enabled?: bool} $flow @return array<string, mixed> */
    public function create(array $flow): array
    {
        return $this->client->request('POST', '/api/centrex/flows', $flow);
    }

    /** @param array<string, mixed> $flow @return array<string, mixed> */
    public function update(string $id, array $flow): array
    {
        return $this->client->request('PUT', '/api/centrex/flows/' . self::id($id), $flow);
    }

    /** @return array<string, mixed> */
    public function delete(string $id): array
    {
        return $this->client->request('DELETE', '/api/centrex/flows/' . self::id($id));
    }

    /** Vérifie un graphe sans l'enregistrer. @param array<string, mixed> $graph @return array{errors: list<string>, warnings: list<string>} */
    public function validate(array $graph): array
    {
        return $this->client->request('POST', '/api/centrex/flows/validate', ['graph' => $graph]);
    }

    /** Simule le scénario sans appel réel. @param array<string, mixed> $graph @param array<string, mixed> $options caller, did, digits… @return array<string, mixed> */
    public function simulate(array $graph, array $options = []): array
    {
        return $this->client->request('POST', '/api/centrex/flows/simulate', ['graph' => $graph] + $options);
    }
}
