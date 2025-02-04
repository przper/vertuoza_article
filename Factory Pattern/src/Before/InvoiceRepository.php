<?php

namespace App\Before;

class InvoiceRepository
{
    public function findInvoiceById(string $id): ?Invoice
    {
        return null;
    }

    public function update(Invoice $invoice): void
    {

    }
}