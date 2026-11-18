<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Simple
{
    public readonly SimpleNumbers $numbers;
    public readonly SimpleOverview $overview;
    public readonly SimpleUsers $users;

    public function __construct(private Client $client)
    {
        $this->numbers = new SimpleNumbers($client);
        $this->overview = new SimpleOverview($client);
        $this->users = new SimpleUsers($client);
    }

}
