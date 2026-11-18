<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class Ai
{
    public readonly AiAnalyses $analyses;
    public readonly AiCalls $calls;
    public readonly AiSettings $settings;
    public readonly AiStatus $status;

    public function __construct(private Client $client)
    {
        $this->analyses = new AiAnalyses($client);
        $this->calls = new AiCalls($client);
        $this->settings = new AiSettings($client);
        $this->status = new AiStatus($client);
    }

}
