<?php

namespace After;

use Before\DocumentType;
use Before\Line;
use Solution\DocumentLineRepository;
use Solution\DocumentRepository;

class LineService
{
    public function __construct(
        private DocumentRepository $documentRepository,
        private DocumentLineRepository $documentLineRepository,
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
        $document = $this->documentRepository->find($documentId);

        if ($document === null) {
            throw new NotFoundException();
        }

        $lines = $this->documentLineRepository->find($documentId);

        $total = 0.0;
        // do stuff, example recalculate total value of Document

        $document->setTotalPrice($total);

        $this->documentLineRepository->update($updatedLines);
        $this->documentRepository->update($document);
    }
}