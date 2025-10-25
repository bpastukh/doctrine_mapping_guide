<?php

namespace App\ValueObject;

final readonly class ProductName
{
    public function __construct(public string $value)
    {
    }
}
