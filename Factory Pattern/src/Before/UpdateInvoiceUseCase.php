<?php

namespace App\Before;

class UpdateInvoiceUseCase
{
    public function __construct(
        private LineService $service,
    )
    {
    }

    public function handle(DocumentType $type, string $documentId): string
    {
        $lines = [];

        $this->service->handleLines(
            type: $type,
            documentId: $documentId,
            updatedLines: $lines,
        );

        return $documentId;
    }
}