<?php

namespace Solution;

use Before\Line;

interface DocumentLineRepository
{
    /** @return Line[] */
    public function find(string $id): array;

    /** @param Line[] $updatedLines */
    public function update(array $updatedLines): void;
}