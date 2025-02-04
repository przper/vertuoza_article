<?php

namespace App\After;

use App\Before\DocumentType;

class UpdateInvoiceUseCase
{
    public function __construct(
        private LineService $service,
    )
    {
    }

}