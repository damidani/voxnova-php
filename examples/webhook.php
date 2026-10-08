<?php

/**
 * Exemple de webhook (dial plan en code) — serveur intégré :  VX_SECRET=vxs_… php -S 0.0.0.0:8080 examples/webhook.php
 * Dans le portail développeurs, l'application a pour URL du webhook : https://votre-serveur/voice
 */

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use VoxNova\VoiceResponse;
use VoxNova\Webhook;

$base = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
$call = Webhook::request((string) getenv('VX_SECRET')); // 401 si la signature est invalide
$r = new VoiceResponse();

switch (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH)) {
    case '/voice':
        if ($call['direction'] === 'endpoint') {
            // appels émis par vos endpoints : votre propre plan de numérotation
            $r->dial(['number' => $call['to']], ['callerId' => '+33190000000']);
            break;
        }
        $r->play('https://exemple.fr/accueil.mp3')
          ->gather(['numDigits' => 1, 'timeout' => 6, 'action' => "$base/menu"]);
        break;

    case '/menu':
        $digits = $call['digits'] ?? '';
        $r->set(['choix' => $digits]);
        match ($digits) {
            '1' => $r->dial([['endpoint' => '1000'], ['endpoint' => '1001']], ['timeout' => 25, 'action' => "$base/fin"]),
            '2' => $r->record(['maxSeconds' => 60, 'action' => "$base/message"]),
            default => $r->say($digits ?: '0', 'digits')->redirect("$base/voice"),
        };
        break;

    case '/fin':
        if (($call['dial']['status'] ?? '') !== 'completed') {
            $r->voicemail('1000');
        } else {
            $r->hangup();
        }
        break;

    case '/message':
        // $call['recording'] = ['id' => …, 'duration' => …] : écoute via $client->recordings->url($id)
        $r->hangup();
        break;
}

$r->send();
