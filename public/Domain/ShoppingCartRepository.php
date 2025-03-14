<?php

declare(strict_types=1);

namespace Domain;

interface ShoppingCartRepository
{
    public function getAllShoppingCartProducts(): array;
    //public function byOrderId(string $orderId): ?ShoppingCart;
    public function addProduct(ShoppingCartLine $cartLine): void;
}