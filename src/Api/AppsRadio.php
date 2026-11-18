<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsRadio
{
    public readonly AppsRadioCalls $calls;
    public readonly AppsRadioShows $shows;

    public function __construct(private Client $client)
    {
        $this->calls = new AppsRadioCalls($client);
        $this->shows = new AppsRadioShows($client);
    }

}
