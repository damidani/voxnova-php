<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Espace revendeur (clé vxr_) : clients, packs et crédits de SMS, expéditeurs interdits, webhooks, factures. */
final class Reseller extends Resource
{
    /** @return array<string, mixed> */
    public function me(): array
    {
        return $this->client->request('GET', '/api/reseller/me');
    }

    /** @return list<array<string, mixed>> */
    public function clients(?string $search = null): array
    {
        return $this->client->request('GET', '/api/reseller/clients', null, ['q' => $search]);
    }

    /** @return array<string, mixed> */
    public function client(string $id): array
    {
        return $this->client->request('GET', '/api/reseller/clients/' . self::id($id));
    }

    /** @param array{company: string, name: string, email: string, password: string, product?: string, trialDays?: int} $input @return array<string, mixed> */
    public function createClient(array $input): array
    {
        return $this->client->request('POST', '/api/reseller/clients', $input);
    }

    /** Suspension, réactivation ou prolongation d'essai. @param array{status?: 'ACTIVE'|'SUSPENDED', extendTrialDays?: int} $changes @return array<string, mixed> */
    public function updateClient(string $id, array $changes): array
    {
        return $this->client->request('PATCH', '/api/reseller/clients/' . self::id($id), $changes);
    }

    /** @return list<array<string, mixed>> */
    public function smsPacks(): array
    {
        return $this->client->request('GET', '/api/reseller/sms/packs');
    }

    /** @param array{name: string, kind: 'MONTHLY'|'LIFETIME', credits: int, priceCents?: int, active?: bool} $pack @return array<string, mixed> */
    public function createSmsPack(array $pack): array
    {
        return $this->client->request('POST', '/api/reseller/sms/packs', $pack);
    }

    /** MONTHLY remplace le forfait mensuel ; LIFETIME ajoute au solde à vie. @return array<string, mixed> */
    public function applySmsPack(string $clientId, string $packId): array
    {
        return $this->client->request('POST', '/api/reseller/clients/' . self::id($clientId) . '/sms/pack', ['packId' => $packId]);
    }

    /** Crédits et expéditeurs interdits d'un client. @return array<string, mixed> */
    public function clientSms(string $clientId): array
    {
        return $this->client->request('GET', '/api/reseller/clients/' . self::id($clientId) . '/sms');
    }

    /** Expéditeur interdit pour tous vos clients (ou pour un seul avec $clientId). @return array<string, mixed> */
    public function blockSender(string $value, string $kind = 'exact', string $reason = '', ?string $clientId = null): array
    {
        $path = $clientId === null ? '/api/reseller/sms/sender-blocks' : '/api/reseller/clients/' . self::id($clientId) . '/sms/sender-blocks';
        return $this->client->request('POST', $path, ['value' => $value, 'kind' => $kind, 'reason' => $reason]);
    }

    /** SMS de tous vos clients. @return array{total: int, items: list<array<string, mixed>>} */
    public function sms(?string $orgId = null, ?string $status = null, int $page = 1): array
    {
        return $this->client->request('GET', '/api/reseller/sms', null, ['orgId' => $orgId, 'status' => $status, 'page' => $page]);
    }

    /** Webhook recevant les événements de TOUS vos clients (sms.status). @return array<string, mixed> */
    public function createWebhook(string $url): array
    {
        return $this->client->request('POST', '/api/reseller/webhooks', ['url' => $url, 'events' => ['sms.status']]);
    }

    /** @return list<array<string, mixed>> */
    public function invoices(): array
    {
        return $this->client->request('GET', '/api/reseller/invoices');
    }
}
