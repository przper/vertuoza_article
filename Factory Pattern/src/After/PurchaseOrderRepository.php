<?php

namespace App\After;

use App\Solution\DocumentRepository;

/** @implements DocumentRepository<PurchaseOrder> */
class PurchaseOrderRepository implements DocumentRepository
{
    public function find(string $id): ?PurchaseOrder
    {
        return null;
    }

    /** @param PurchaseOrder $document */
    public function update($document): void
    {

    }
}