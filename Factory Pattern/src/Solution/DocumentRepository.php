<?php

namespace App\Solution;

/** @template T of Document */
interface DocumentRepository
{
    /** @return ?T */
    public function find(string $id): ?Document;

    /**
     * @param T $document
     * @throws \InvalidArgumentException
     */
    public function update($document): void;
}