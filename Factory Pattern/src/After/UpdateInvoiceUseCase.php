<?php

namespace App\After;

use App\Before\DocumentType;

class UpdateInvoiceUseCase
{
    public function __construct(
        #[Inject('invoice-line-service')]
        private LineService $service,
    ) {
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