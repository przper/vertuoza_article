<?php

namespace App\Solution;

interface DocumentRepository
{
    public function find(string $id): ?Document;

    /**
     * @throws \InvalidArgumentException
     */
    public function update(Document $document): void;
}