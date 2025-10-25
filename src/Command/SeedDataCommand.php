<?php

namespace App\Command;

use App\Entity\Product;
use App\Entity\RichProduct;
use App\ValueObject\ProductName;
use App\ValueObject\ProductPrice;
use App\ValueObject\StringValue;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:seed-data')]
class SeedDataCommand extends Command
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $product = new Product();
        $product->setName('Sample Product');
        $product->setPrice(1999);

        $richProduct = new RichProduct(
            new ProductName('Rich Sample Product'),
            new ProductPrice(2999),
            new StringValue('A premium product with advanced features')
        );

        $this->entityManager->persist($product);
        $this->entityManager->persist($richProduct);
        $this->entityManager->flush();

        $output->writeln('Data seeded successfully!');

        return Command::SUCCESS;
    }
}
