<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Compte : limites, utilisation et consommation du mois. */
final class Account extends Resource
{
    /** @return array<string, mixed> */
    public function get(): array
    {
        return $this->client->request('GET', '/api/v1/account');
    }

    /** Consommation du mois en cours (numéros, minutes). @return array<string, mixed> */
    public function usage(): array
    {
        return $this->client->request('GET', '/api/v1/usage');
    }
}
