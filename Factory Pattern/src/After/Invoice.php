<?php

namespace App\After;

use App\Before\DocumentType;
use App\Before\Line;

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

    /** @return Line[]*/
    public function getLines(): array
    {
        return $this->lines;
    }

    /** @param Line[] $lines*/
    public function setLines(array $lines): void
    {
        $this->lines = $lines;
    }

    public function getDocumentType(): DocumentType
    {
        return $this->documentType;
    }
}