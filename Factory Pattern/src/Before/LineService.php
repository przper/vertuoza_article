<?php

namespace App\Before;

use Exception;

class LineService
{
    public function __construct(
        private InvoiceRepository $invoiceRepository,
        private InvoiceLineRepository $invoiceLineRepository,
        private PurchaseOrderRepository $purchaseOrderRepository,
		private PurchaseOrderLineRepository $purchaseOrderLineRepository,
	) {
    }

    /**
     * @param Line[] $updatedLines
     */
    public function handleLines(
        DocumentType $type,
        string $documentId,
        array $updatedLines,
	): void {
        $document = match ($type) {
            DocumentType::Invoice => $this->invoiceRepository->findInvoiceById($documentId),
            DocumentType::PurchaseOrder => $this->purchaseOrderRepository->findPurchaseOrderById($documentId),
        };

        if ($document === null) {
            throw new Exception("Not found");
        }

        $lines = match ($type) {
            DocumentType::Invoice => $this->invoiceLineRepository->findByInvoiceId($documentId),
            DocumentType::PurchaseOrder => $this->purchaseOrderLineRepository->findPurchaseOrderById($documentId),
        };

        if ($document instanceof Invoice) {
            $total = 0.0;
            // do stuff, example recalculate total value of Invoice

            $document->setTotalPrice($total);
            $this->invoiceLineRepository->update($updatedLines);
            $this->invoiceRepository->update($document);
        }

        if ($document instanceof PurchaseOrder) {
            $total = 0.0;
            // do stuff, example recalculate total value of PurchaseOrder

            $document->setTotalPrice($total);
            $this->purchaseOrderLineRepository->update($updatedLines);
            $this->purchaseOrderRepository->update($document);
        }
    }
}