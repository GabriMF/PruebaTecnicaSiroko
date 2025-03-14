<?php

declare(strict_types=1);

namespace Domain;

class ShoppingCart {
    public const STATUS_ACTIVE = 1;
    public const STATUS_INCOMPLETE = 2;
    public const STATUS_COMPLETED = 3;
    public const STATUS_AWAITING_PAYMENT = 4;

    public const AVAILBALE_STATUSES = [
        self::STATUS_ACTIVE,
        self::STATUS_INCOMPLETE,
        self::STATUS_COMPLETED,
        self::STATUS_AWAITING_PAYMENT
    ];

    public function __construct(
        private string $shoppingCartId,
        private string $customerId,
        private array $shoppingCartLine,
        private int $status,
   ){}
    
    public function getShoppingCartId(): string{
        return $this->shoppingCartId;
    }
    public function getCustomerId(): string{        
        return $this->customerId;
    }
    public function getShoppingCartLine(): array{
        return $this->shoppingCartLine;
    }
    public function getStatus(): int{
        return $this->status;
    }
    

    public function setShoppingCartId(string $shoppingCartId): void{
        $this->shoppingCartId = $shoppingCartId;
    }
    public function setCustomerId(string $customerId): void{
        $this->customerId = $customerId;
    }
    public function setShoppingCartLine(array $shoppingCartLine): void{
        $this->shoppingCartLine = $shoppingCartLine;
    }
    public function setStatus(int $status): void{
        if (!in_array($status, self::AVAILBALE_STATUSES)) {
            throw new \InvalidArgumentException('Invalid status');
        }

        $this->status = $status;
    }
}