<?php

use Doctrine\ORM\Mapping\ClassMetadata;

$metadata->isEmbeddedClass = true;

$metadata->mapField([
    'fieldName' => 'value',
    'type' => 'integer',
    'columnName' => 'value',
]);
