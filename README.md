# Doctrine Mappings Demo

This project demonstrates different Doctrine ORM mapping approaches in Symfony.

## Mapping Types Demonstrated

### 1. Attributes Mapping (not that they are only for demonstration, PHP Driver is being configured)
- **Entity**: `Product`
- **Location**: `src/Entity/Product.php`
- Uses PHP 8 attributes directly in the entity class

### 2. PHP Driver Mapping
- **Entity**: `RichProduct`
- **Location**: `config/doctrine/App.Entity.RichProduct.php`
- Separate PHP files for mapping configuration

### 3. XML Mapping
- **Entity**: `Product` (alternative)
- **Location**: `config/doctrine/RichProduct.orm.xml`
- XML-based mapping configuration

### 4. YAML Mapping (deprecated)
- **Entity**: `Product` (alternative)
- **Location**: `config/doctrine/RichProduct.orm.yml`
- YAML-based mapping configuration (deprecated in newer versions)

## Features Demonstrated

### Value Objects
- `ProductName` and `ProductPrice` as embeddables
- `StringValue` as reusable value object with custom Doctrine type

### Custom Types
- `StringValueType` for mapping value objects to database columns

### Rich Domain Model
- `RichProduct` uses value objects and constructor promotion
- Demonstrates clean domain modeling with Doctrine

## Setup

1. Install dependencies:
```bash
composer install
```

2. Create database:
```bash
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```

3. Seed data:
```bash
php bin/console app:seed-data
```

## API Endpoints

- `GET /product` - Simple product (attributes mapping)
- `GET /rich-product` - Rich product (PHP driver mapping)

## Configuration

The project uses multiple mapping drivers configured in `config/packages/doctrine.yaml`:
- `AppPhp`: PHP driver for entities in `config/doctrine/`
- `AppAttribute`: Attribute driver for entities in `src/Entity/`

## Key Files

- `src/Entity/Product.php` - Attributes mapping
- `src/Entity/RichProduct.php` - Clean entity for PHP mapping
- `config/doctrine/App.Entity.RichProduct.php` - PHP mapping
- `src/Doctrine/Type/StringValueType.php` - Custom Doctrine type
- `src/ValueObject/StringValue.php` - Reusable value object
