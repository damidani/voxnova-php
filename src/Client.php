<?php

declare(strict_types=1);

namespace VoxNova;

/**
 * Client de l'API REST v1 (clé API vxk_…).
 *
 *   $vx = new VoxNova\Client('vxk_…', 'https://voip.exemple.fr');
 *   $ep = $vx->endpoints->create(['name' => 'Accueil']);
 *
 * Les réponses sont des tableaux associatifs (JSON décodé). Les erreurs lèvent VoxNovaException.
 */
final class Client
{
    public readonly Resources\Account $account;
    public readonly Resources\Applications $applications;
    public readonly Resources\Endpoints $endpoints;
    public readonly Resources\Numbers $numbers;
    public readonly Resources\Calls $calls;
    public readonly Resources\Cdr $cdr;
    public readonly Resources\Recordings $recordings;
    public readonly Resources\Audio $audio;
    public readonly Resources\Logs $logs;

    private string $baseUrl;

    public function __construct(private string $apiKey, string $baseUrl, private int $timeoutSec = 15)
    {
        if (!str_starts_with($apiKey, 'vxk_')) {
            throw new \InvalidArgumentException('Clé API vxk_… requise');
        }
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->account = new Resources\Account($this);
        $this->applications = new Resources\Applications($this);
        $this->endpoints = new Resources\Endpoints($this);
        $this->numbers = new Resources\Numbers($this);
        $this->calls = new Resources\Calls($this);
        $this->cdr = new Resources\Cdr($this);
        $this->recordings = new Resources\Recordings($this);
        $this->audio = new Resources\Audio($this);
        $this->logs = new Resources\Logs($this);
    }

    /**
     * Requête brute vers l'API (chemin commençant par /api/v1/).
     * @param array<string, mixed>|null $body JSON (ou champs multipart si $multipart)
     * @param array<string, scalar|null> $query
     * @return mixed
     */
    public function request(string $method, string $path, ?array $body = null, array $query = [], bool $multipart = false): mixed
    {
        $query = array_filter($query, static fn ($v) => $v !== null);
        $query = array_map(static fn ($v) => is_bool($v) ? ($v ? 'true' : 'false') : $v, $query);
        $url = $this->baseUrl . $path . ($query ? '?' . http_build_query($query) : '');
        $headers = ['Authorization: Bearer ' . $this->apiKey, 'Accept: application/json', 'User-Agent: voxnova-php/1.0'];
        $ch = curl_init($url);
        $opts = [
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => $this->timeoutSec,
            CURLOPT_FOLLOWLOCATION => false,
        ];
        if ($body !== null) {
            if ($multipart) {
                $opts[CURLOPT_POSTFIELDS] = $body;
            } else {
                $headers[] = 'Content-Type: application/json';
                $opts[CURLOPT_POSTFIELDS] = json_encode((object) $body, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
            }
        }
        $opts[CURLOPT_HTTPHEADER] = $headers;
        curl_setopt_array($ch, $opts);
        $raw = curl_exec($ch);
        if ($raw === false) {
            $err = curl_error($ch);
            curl_close($ch);
            throw new VoxNovaException('Connexion impossible : ' . $err, 0, null);
        }
        $status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);
        $data = $raw === '' ? null : json_decode((string) $raw, true);
        if ($status < 200 || $status >= 300) {
            $message = is_array($data) && isset($data['error']) ? (string) $data['error'] : 'HTTP ' . $status;
            throw new VoxNovaException($message, $status, $data ?? $raw);
        }
        return $data;
    }
}
