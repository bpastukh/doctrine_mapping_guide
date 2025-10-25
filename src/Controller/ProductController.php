<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/product')]
    public function show(ProductRepository $productRepository): JsonResponse
    {
        $product = $productRepository->findOneBy([]);

        if (!$product) {
            return $this->json(['error' => 'No product found']);
        }

        return $this->json([
            'id' => $product->getId(),
            'name' => $product->getName(),
            'price' => $product->getPrice()
        ]);
    }
}
