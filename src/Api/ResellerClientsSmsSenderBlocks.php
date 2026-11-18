<?php
// Fichier généré par « npm run sdk » (apps/api) depuis la spécification de l'API : ne pas modifier à la main.
declare(strict_types=1);

namespace VoxNova\Api;

use VoxNova\Client;

final class ResellerClientsSmsSenderBlocks
{

    public function __construct(private Client $client)
    {
    }

    /**
     * Lève l’interdiction d’un expéditeur.
     * Droits : Revendeur.
     * DELETE /api/reseller/clients/:id/sms/sender-blocks/:blockId
     */
    public function delete(string $id, string $blockId, array $query = []): mixed
    {
        return $this->client->request('DELETE', '/api/reseller/clients/' . rawurlencode($id) . '/sms/sender-blocks/' . rawurlencode($blockId), null, $query);
    }
}
