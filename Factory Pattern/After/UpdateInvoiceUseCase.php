<?php

namespace After;

class UpdateInvoiceUseCase
{
    public function __construct(
        private LineService $service,
    )
    {
    }

}