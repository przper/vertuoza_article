<?php

use App\After\DependencyContainerInterface;
use App\After\InvoiceLineServiceFactory;
use App\After\PurchaseOrderLineServiceFactory;

$container = DummyContainer::create();

$container->register([
    'invoice-line-service' => function (DependencyContainerInterface $c) {
        return (new InvoiceLineServiceFactory($c))->build();
    },
    'purchase-order-line-service' => function (DependencyContainerInterface $c) {
        return (new PurchaseOrderLineServiceFactory($c))->build();
    },
]);

return $container;