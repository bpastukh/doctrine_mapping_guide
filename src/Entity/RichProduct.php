<?php

namespace App\Entity;

use App\ValueObject\ProductName;
use App\ValueObject\ProductPrice;
use App\ValueObject\StringValue;

class RichProduct
{
    private ?int $id = null;

    public function __construct(
        private ProductName $name,
        private ProductPrice $price,
        private StringValue $description,
    ) {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ProductName
    {
        return $this->name;
    }

    public function getPrice(): ProductPrice
    {
        return $this->price;
    }

    public function getDescription(): StringValue
    {
        return $this->description;
    }
}
