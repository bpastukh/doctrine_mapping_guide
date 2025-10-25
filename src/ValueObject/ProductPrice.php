<?php

namespace App\ValueObject;

use InvalidArgumentException;

final readonly class ProductPrice
{
    private int $value;

    public function __construct(int $value)
    {
        if ($value < 0) {
            throw new InvalidArgumentException('Price cannot be negative');
        }

        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
