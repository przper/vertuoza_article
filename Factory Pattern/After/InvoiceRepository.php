<?php

namespace After;

use Solution\Document;
use Solution\DocumentRepository;

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