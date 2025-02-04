<?php

namespace App\After;

/** @implements DocumentRepository<Invoice> */
class InvoiceRepository implements DocumentRepository
{
    public function find(string $id): ?Invoice
    {
        return null;
    }

    /** @param Invoice $document */
    public function update($document): void
    {
        // persist data
    }
}