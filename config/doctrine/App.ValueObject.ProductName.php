<?php

use Doctrine\ORM\Mapping\ClassMetadata;

$metadata->isEmbeddedClass = true;

$metadata->mapField([
    'fieldName' => 'value',
    'type' => 'string',
    'length' => 255,
    'columnName' => 'value',
]);
