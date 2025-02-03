<?php

namespace Before;

class UpdateInvoiceUseCase
{
    public function __construct(
        private LineService $service,
    )
    {
    }

    public function handle(): Invoice
    {

    }
}