<?php

namespace App\After;

/** @template T of Document */
interface DocumentRepository
{
    /** @return ?Document */
    public function find(string $id): ?Document;

    /**
     * @param Document $document
     * @throws \InvalidArgumentException
     */
    public function update($document): void;
}