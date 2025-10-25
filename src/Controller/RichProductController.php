<?php

namespace App\Controller;

use App\Repository\RichProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class RichProductController extends AbstractController
{
    #[Route('/rich-product')]
    public function show(RichProductRepository $richProductRepository): JsonResponse
    {
        $product = $richProductRepository->findOneBy([]);

        if (!$product) {
            return $this->json(['error' => 'No rich product found']);
        }

        return $this->json([
            'id' => $product->getId(),
            'name' => $product->getName()->value,
            'price' => $product->getPrice()->getValue()
        ]);
    }
}
