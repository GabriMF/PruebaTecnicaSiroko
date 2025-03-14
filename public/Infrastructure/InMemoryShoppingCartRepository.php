<?php

declare(strict_types=1);

namespace Infrastructure;

use Domain\ShoppingCartLine;
use Domain\ShoppingCartRepository;


class InMemoryShoppingCartRepository implements ShoppingCartRepository{

    public function getAllShoppingCartProducts(): array{

        return array_values($this->products);
    }

    private array $products = [];
    public function addProduct( ShoppingCartLine $cartLine): void{

        $productId = $cartLine->getItemId();

        // Si el producto ya existe en el carrito, actualiza la cantidad
        if (isset($this->products[$productId])) {
            $this->products[$productId]->incrementQuantity($cartLine->getQuantity());

        } else {
            // Si es un producto nuevo, agrégalo al carrito
            $this->products[$productId] = $cartLine;
        }
    }

   
}
