<?php

namespace App\After;

use App\Before\Line;

class InvoiceLineRepository implements DocumentLineRepository
{
    public function find(string $id): array
    {
        return [];
    }

    /** @param Line[] $updatedLines */
    public function update(array $updatedLines): void
    {

    }
}