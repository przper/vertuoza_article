<?php

namespace App\After;

use App\Solution\DocumentRepository;

class InvoiceRepository implements DocumentRepository
{
    public function find(string $id): ?Invoice
    {

    }

    public function update(Document $document): void
    {
        if ($document instanceof Invoice) {
            return;
        }

        // persist data
    }
}