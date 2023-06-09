<?php
/**
 * Description of OrderCart.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\Entities;


use App\Services\Orders\DTO\OrderCartProducts;
use Dots\Data\Entity;

class OrderCart extends Entity
{
    protected string $userId;
    protected string $companyId;
    protected ?string $address;
    protected int $deliveryType;
    protected ?string $note;
    protected int $timeToReceiving;
    protected OrderCartProducts $cartItems;

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getCompanyId(): string
    {
        return $this->companyId;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getDeliveryType(): int
    {
        return $this->deliveryType;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function getTimeToReceiving(): int
    {
        return $this->timeToReceiving;
    }

    public function getCartItems(): OrderCartProducts
    {
        return $this->cartItems;
    }

    public function resolvePrice(): float
    {
        $result = 0.0;
        foreach ($this->getCartItems()->all() as $cartItem) {
            $result += $cartItem->getPrice();
        }

        return $result;
    }
}
