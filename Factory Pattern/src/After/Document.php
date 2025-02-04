<?php

namespace App\After;

use App\Before\DocumentType;

interface Document
{
    public function getDocumentType(): DocumentType;

    public function setTotalPrice(float $totalPrice): void;
}