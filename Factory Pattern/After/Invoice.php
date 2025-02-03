<?php

namespace After;

use Before\DocumentType;
use Before\Line;
use Solution\Document;

class Invoice implements Document
{
    private DocumentType $documentType = DocumentType::Invoice;

    /** @param Line[] $lines */
    public function __construct(
        private string $id,
        private float $totalPrice = 0.0,
        private array $lines = [],
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function getLines(): array
    {
        return $this->lines;
    }

    public function setLines(array $lines): void
    {
        $this->lines = $lines;
    }

    public function getDocumentType(): DocumentType
    {
        return $this->documentType;
    }
}