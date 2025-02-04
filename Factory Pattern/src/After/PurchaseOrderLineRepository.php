<?php

namespace App\After;

use App\Before\Line;

class PurchaseOrderLineRepository implements DocumentLineRepository
{
    /** @return Line[] */
    public function find(string $id): array
    {
        return [];
    }

    /** @param Line[] $updatedLines */
    public function update(array $updatedLines): void
    {
    }
}