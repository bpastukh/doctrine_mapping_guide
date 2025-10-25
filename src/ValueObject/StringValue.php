<?php

namespace App\ValueObject;

final readonly class StringValue
{
    public function __construct(
        public string $value
    ) {
    }
}
