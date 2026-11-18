<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AppsHotel
{
    public readonly AppsHotelRooms $rooms;
    public readonly AppsHotelSettings $settings;
    public readonly AppsHotelStays $stays;
    public readonly AppsHotelWakeups $wakeups;

    public function __construct(private Client $client)
    {
        $this->rooms = new AppsHotelRooms($client);
        $this->settings = new AppsHotelSettings($client);
        $this->stays = new AppsHotelStays($client);
        $this->wakeups = new AppsHotelWakeups($client);
    }

}
