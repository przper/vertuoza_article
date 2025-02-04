<?php

namespace App\After;

class InvoiceLineServiceFactory
{
    public function __construct(
        private DependencyContainerInterface $container,
    ) {
    }

    public function build(): LineService
    {
        return new LineService(
            documentRepository: $this->container->get(InvoiceRepository::class),
            documentLineRepository: $this->container->get(InvoiceLineRepository::class),
        );
    }
}