<?php

namespace App\After;

class PurchaseOrderLineServiceFactory
{
    public function __construct(
        private DependencyContainerInterface $container,
    ) {
    }

    public function build(): LineService
    {
        return new LineService(
            documentRepository: $this->container->get(PurchaseOrderRepository::class),
            documentLineRepository: $this->container->get(PurchaseOrderLineRepository::class),
        );
    }
}