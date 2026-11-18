<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class AddonsWhmcs
{
    public readonly AddonsWhmcsModuleZip $moduleZip;
    public readonly AddonsWhmcsSettings $settings;

    public function __construct(private Client $client)
    {
        $this->moduleZip = new AddonsWhmcsModuleZip($client);
        $this->settings = new AddonsWhmcsSettings($client);
    }

}
