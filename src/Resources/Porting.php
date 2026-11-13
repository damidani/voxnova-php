<?php

declare(strict_types=1);

namespace VoxNova\Resources;

/** Portabilité de numéros : demande, suivi, mandat à signer, documents, annulation (webhook porting.status). */
final class Porting extends Resource
{
    /**
     * Mobiles : `rio` obligatoire (12 caractères). Documents en base64 (`documents: [['name' => …, 'type' => 'application/pdf', 'content' => base64]]`),
     * sauf si le mandat est signé en ligne (config()['esign']).
     * @param array{numbers: list<string>, holderName: string, contactName: string, contactEmail: string, numberType?: 'FIXE'|'MOBILE', siret?: string, address?: string, currentOperator?: string, rio?: string, desiredDate?: string, contactPhone?: string, notes?: string, documents?: list<array{name: string, type: string, content: string}>} $request
     * @return array<string, mixed>
     */
    public function create(array $request): array
    {
        return $this->client->request('POST', '/api/v1/porting', $request);
    }

    /** @return array{items: list<array<string, mixed>>, total: int, page: int} */
    public function list(?string $status = null, ?string $number = null, int $page = 1, int $pageSize = 25): array
    {
        return $this->client->request('GET', '/api/v1/porting', null, ['status' => $status, 'number' => $number, 'page' => $page, 'pageSize' => $pageSize]);
    }

    /** @return array<string, mixed> */
    public function get(string $id): array
    {
        return $this->client->request('GET', '/api/v1/porting/' . self::id($id));
    }

    /** Lien de signature du mandat (état AWAITING_SIGNATURE). @return array{url: string} */
    public function signUrl(string $id): array
    {
        return $this->client->request('GET', '/api/v1/porting/' . self::id($id) . '/sign');
    }

    /** @return array<string, mixed> */
    public function cancel(string $id): array
    {
        return $this->client->request('POST', '/api/v1/porting/' . self::id($id) . '/cancel', []);
    }

    /** Opérateur actuel d'un numéro (bases de portabilité). @return array{operator: ?string} */
    public function operator(string $number): array
    {
        return $this->client->request('GET', '/api/v1/porting/operator', null, ['number' => $number]);
    }

    /** @return array{esign: bool, documents: array<string, mixed>} */
    public function config(): array
    {
        return $this->client->request('GET', '/api/v1/porting/config');
    }
}
