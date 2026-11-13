<?php

declare(strict_types=1);

namespace VoxNova;

/**
 * Client de l'API REST (clé d'entreprise vxk_… ou clé revendeur vxr_…).
 *
 *   $vx = new VoxNova\Client('vxk_…', 'https://voip.exemple.fr');
 *   $ep = $vx->endpoints->create(['name' => 'Accueil']);
 *   $vx->sms->send(['to' => '0612345678', 'text' => 'Bonjour', 'tag' => 'bienvenue']);
 *
 * Revendeur : une clé vxr_… agit sur /api/reseller/…, et sur un client avec forOrganization() :
 *
 *   $reseller = new VoxNova\Client('vxr_…', 'https://api.exemple.fr');
 *   $client = $reseller->forOrganization('<id du client>');
 *   $client->flows->update($id, ['name' => 'Accueil', 'graph' => $graph]);
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
    public readonly Resources\Sms $sms;
    public readonly Resources\Webhooks $webhooks;
    public readonly Resources\Porting $porting;
    public readonly Resources\Voicemail $voicemail;
    public readonly Resources\Panel $panel;
    public readonly Resources\Flows $flows;
    public readonly Resources\Crud $users;
    public readonly Resources\Crud $extensions;
    public readonly Resources\Crud $queues;
    public readonly Resources\Crud $ringGroups;
    public readonly Resources\Crud $ivr;
    public readonly Resources\Crud $timeConditions;
    public readonly Resources\Crud $conferences;
    public readonly Resources\Reseller $reseller;

    private string $baseUrl;

    public function __construct(private string $apiKey, string $baseUrl, private int $timeoutSec = 15, private ?string $organization = null)
    {
        if (!str_starts_with($apiKey, 'vxk_') && !str_starts_with($apiKey, 'vxr_')) {
            throw new \InvalidArgumentException('Clé API vxk_… (entreprise) ou vxr_… (revendeur) requise');
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
        $this->sms = new Resources\Sms($this);
        $this->webhooks = new Resources\Webhooks($this);
        $this->porting = new Resources\Porting($this);
        $this->voicemail = new Resources\Voicemail($this);
        $this->panel = new Resources\Panel($this);
        $this->flows = new Resources\Flows($this);
        $this->users = new Resources\Crud($this, '/api/org/users', 'PATCH');
        $this->extensions = new Resources\Crud($this, '/api/org/extensions');
        $this->queues = new Resources\Crud($this, '/api/centrex/queues');
        $this->ringGroups = new Resources\Crud($this, '/api/centrex/ring-groups');
        $this->ivr = new Resources\Crud($this, '/api/centrex/ivr');
        $this->timeConditions = new Resources\Crud($this, '/api/centrex/time-conditions');
        $this->conferences = new Resources\Crud($this, '/api/centrex/conferences');
        $this->reseller = new Resources\Reseller($this);
    }

    /** Revendeur : même clé vxr_, mais au nom d'un de vos clients (en-tête X-Organization). */
    public function forOrganization(string $organization): self
    {
        return new self($this->apiKey, $this->baseUrl, $this->timeoutSec, $organization);
    }

    /**
     * Requête brute vers l'API (chemin commençant par /api/).
     * @param array<string, mixed>|null $body JSON (ou champs multipart si $multipart)
     * @param array<string, scalar|null> $query
     * @return mixed
     */
    public function request(string $method, string $path, ?array $body = null, array $query = [], bool $multipart = false): mixed
    {
        $query = array_filter($query, static fn ($v) => $v !== null);
        $query = array_map(static fn ($v) => is_bool($v) ? ($v ? 'true' : 'false') : $v, $query);
        $url = $this->baseUrl . $path . ($query ? '?' . http_build_query($query) : '');
        $headers = ['Authorization: Bearer ' . $this->apiKey, 'Accept: application/json', 'User-Agent: voxnova-php/1.1'];
        if ($this->organization !== null && $this->organization !== '') {
            $headers[] = 'X-Organization: ' . $this->organization;
        }
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
