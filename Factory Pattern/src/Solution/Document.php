<?php

namespace App\Solution;

use App\Before\DocumentType;

interface Document
{
    public function getDocumentType(): DocumentType;

    public function setTotalPrice(float $totalPrice): float;
}