<?php

declare(strict_types=1);

namespace VoxNova;

/**
 * Webhooks : vérification de la signature et lecture de la requête.
 *
 * En-tête : X-VoxNova-Signature: t=<horodatage>,v1=<HMAC-SHA256(secret, "<t>.<corps brut>") en hexadécimal>
 */
final class Webhook
{
    /** Vérifie la signature sur le corps brut ; refuse les requêtes de plus de $toleranceSec secondes (rejeu). */
    public static function verifySignature(string $secret, string $rawBody, ?string $header, int $toleranceSec = 300): bool
    {
        if ($header === null || $header === '') {
            return false;
        }
        $parts = [];
        foreach (explode(',', $header) as $p) {
            $kv = explode('=', trim($p), 2);
            if (count($kv) === 2) {
                $parts[$kv[0]] = $kv[1];
            }
        }
        $ts = (int) ($parts['t'] ?? 0);
        if ($ts === 0 || !isset($parts['v1']) || abs(time() - $ts) > $toleranceSec) {
            return false;
        }
        return hash_equals(hash_hmac('sha256', $ts . '.' . $rawBody, $secret), $parts['v1']);
    }

    /**
     * Lit et vérifie la requête courante (php://input). Répond 401 et arrête le script si la signature est invalide.
     * @return array<string, mixed> corps décodé : event, callId, direction, from, to, digits, dial, recording, vars…
     */
    public static function request(string $secret, int $toleranceSec = 300): array
    {
        $raw = (string) file_get_contents('php://input');
        $header = $_SERVER['HTTP_X_VOXNOVA_SIGNATURE'] ?? null;
        if (!self::verifySignature($secret, $raw, $header, $toleranceSec)) {
            http_response_code(401);
            exit('Signature invalide');
        }
        $data = json_decode($raw, true);
        return is_array($data) ? $data : [];
    }
}
