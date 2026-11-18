<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Apps
{
    public readonly AppsCallcenter $callcenter;
    public readonly AppsHotel $hotel;
    public readonly AppsRadio $radio;

    public function __construct(private Client $client)
    {
        $this->callcenter = new AppsCallcenter($client);
        $this->hotel = new AppsHotel($client);
        $this->radio = new AppsRadio($client);
    }

}
