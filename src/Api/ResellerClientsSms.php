<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerClientsSms
{
    public readonly ResellerClientsSmsSenderBlocks $senderBlocks;

    public function __construct(private Client $client)
    {
        $this->senderBlocks = new ResellerClientsSmsSenderBlocks($client);
    }

}
