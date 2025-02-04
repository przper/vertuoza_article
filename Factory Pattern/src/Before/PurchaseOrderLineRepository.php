<?php

namespace App\Before;

class PurchaseOrderLineRepository
{
    /** @return Line[] */
    public function findPurchaseOrderById(string $documentId): array
    {
        return [];
    }

    /** @param Line[] $lines*/
    public function update(array $lines): void
    {

    }
}