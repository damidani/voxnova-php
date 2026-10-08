<?php

declare(strict_types=1);

namespace VoxNova;

/** Erreur de l'API : code HTTP ($status, 0 = connexion impossible) et corps de la réponse ($body). */
final class VoxNovaException extends \RuntimeException
{
    public function __construct(string $message, public readonly int $status, public readonly mixed $body)
    {
        parent::__construct($message, $status);
    }
}
