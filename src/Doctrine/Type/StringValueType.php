<?php

namespace App\Doctrine\Type;

use App\ValueObject\StringValue;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class StringValueType extends Type
{
    const STRING_VALUE = 'string_value';

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return $platform->getStringTypeDeclarationSQL($column);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform): ?StringValue
    {
        return $value ? new StringValue($value) : null;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform): ?string
    {
        return $value instanceof StringValue ? $value->value : null;
    }

    public function getName(): string
    {
        return self::STRING_VALUE;
    }
}
