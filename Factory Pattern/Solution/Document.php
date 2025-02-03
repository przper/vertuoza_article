<?php

namespace Solution;

use Before\DocumentType;

interface Document
{
    public function getDocumentType(): DocumentType;

    public function setTotalPrice(float $totalPrice);
}