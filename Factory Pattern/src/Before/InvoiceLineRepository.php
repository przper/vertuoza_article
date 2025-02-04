<?php

namespace App\Before;

class InvoiceLineRepository
{
    /** @return Line[] */
    public function findByInvoiceId(string $id): array
    {
        return [];
    }

    /** @param Line[] $lines */
    public function update(array $lines): void
    {

    }
}