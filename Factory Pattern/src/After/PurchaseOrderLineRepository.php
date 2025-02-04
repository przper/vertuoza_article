<?php

namespace App\After;

class PurchaseOrderLineRepository
use App\Before\Line;
use App\Solution\DocumentLineRepository;

{
    /** @return Line[] */
    public function findPurchaseOrderById(string $documentId): array
    {

    }

    /** @param Line[] */
    public function update(array $updatedLines): void
    {
    }
}