<?php

namespace After;

use Before\Line;
use Solution\DocumentLineRepository;

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