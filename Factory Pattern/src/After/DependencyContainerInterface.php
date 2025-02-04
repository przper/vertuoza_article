<?php

namespace App\After;

interface DependencyContainerInterface
{
    /**
     * @template T
     * @phpstan-param class-string<T> $name
     * @throws \Exception
     * @return T
     */
    public function get(string $name): mixed;

    public function set(string $key, mixed $value): void;
}