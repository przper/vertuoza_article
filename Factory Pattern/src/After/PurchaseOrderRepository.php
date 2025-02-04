<?php

namespace App\After;

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