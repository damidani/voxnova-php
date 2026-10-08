<?php

declare(strict_types=1);

namespace VoxNova\Resources;

use VoxNova\Client;

/** @internal */
abstract class Resource
{
    public function __construct(protected Client $client)
    {
    }

    protected static function id(string $id): string
    {
        return rawurlencode($id);
    }
}
