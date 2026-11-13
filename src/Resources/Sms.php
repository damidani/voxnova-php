<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** SMS : envoi (Brevo), suivi de remise, crédits. */
final class Sms extends Resource
{
    /**
     * Met un SMS en file (statuts : webhook sms.status ou get()). Refusé sans crédit ou si l'expéditeur est interdit.
     * @param array{to: string, text: string, sender?: string, tag?: string, type?: 'transactional'|'marketing', channel?: 'sms'|'whatsapp'|'auto'} $sms
     * @return array<string, mixed>
     */
    public function send(array $sms): array
    {
        return $this->client->request('POST', '/api/v1/sms', $sms);
    }

    /** @return array{items: list<array<string, mixed>>, total: int, page: int} */
    public function list(?string $status = null, ?string $to = null, ?string $tag = null, int $page = 1, int $pageSize = 25): array
    {
        return $this->client->request('GET', '/api/v1/sms', null, ['status' => $status, 'to' => $to, 'tag' => $tag, 'page' => $page, 'pageSize' => $pageSize]);
    }

    /** Par identifiant ou messageId du fournisseur, avec les événements de remise. @return array<string, mixed> */
    public function get(string $id): array
    {
        return $this->client->request('GET', '/api/v1/sms/' . self::id($id));
    }

    /** Forfait du mois (remis à zéro chaque mois) et solde à vie. @return array{monthlyLimit: int, monthlyUsed: int, monthlyLeft: int, balance: int, available: int} */
    public function balance(): array
    {
        return $this->client->request('GET', '/api/v1/sms/balance');
    }
}
