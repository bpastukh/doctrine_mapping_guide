<?php

use App\ValueObject\ProductName;
use App\ValueObject\ProductPrice;
use App\Repository\RichProductRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

$metadata->setInheritanceType(ClassMetadata::INHERITANCE_TYPE_NONE);
$metadata->setCustomRepositoryClass(RichProductRepository::class);
$metadata->setChangeTrackingPolicy(ClassMetadata::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->setTableName('rich_product');

$metadata->mapField([
    'id' => true,
    'fieldName' => 'id',
    'type' => 'integer',
    'columnName' => 'id',
]);

$metadata->mapEmbedded([
    'fieldName' => 'name',
    'class' => ProductName::class,
    'columnPrefix' => 'name_',
]);

$metadata->mapEmbedded([
    'fieldName' => 'price',
    'class' => ProductPrice::class,
    'columnPrefix' => 'price_',
]);

$metadata->mapField([
    'fieldName' => 'description',
    'type' => 'string_value',
    'columnName' => 'description',
]);

$metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_AUTO);
