<?php

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

$metadata->setInheritanceType(ClassMetadata::INHERITANCE_TYPE_NONE);
$metadata->setCustomRepositoryClass(ProductRepository::class);
$metadata->setChangeTrackingPolicy(ClassMetadata::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->setTableName('product');

$metadata->mapField([
    'id' => true,
    'fieldName' => 'id',
    'type' => 'integer',
    'columnName' => 'id',
]);

$metadata->mapField([
    'fieldName' => 'name',
    'type' => 'string',
    'length' => 255,
    'columnName' => 'name',
]);

$metadata->mapField([
    'fieldName' => 'price',
    'type' => 'integer',
    'columnName' => 'price',
]);

$metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_AUTO);
