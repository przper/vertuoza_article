<?php

namespace App\After;

use App\Before\Line;
use App\Solution\DocumentLineRepository;

class InvoiceLineRepository implements DocumentLineRepository
{
    public function find(string $id): array
    {

    }

    /** @param Line[] $lines */
    public function update(array $lines): void
    {

    }
}