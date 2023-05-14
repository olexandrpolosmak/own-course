<?php
/**
 * Description of StoreOrderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\DTO;


use Dots\Data\DTO;

class StoreOrderDTO extends DTO
{
    protected string $userId;
    protected string $companyId;
    protected ?string $address;
    protected int $deliveryType;
    protected ?string $note;
    protected int $timeToReceiving;
    protected float $totalPrice;
    protected array $cartItems;

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

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function getCartItems(): array
    {
        return $this->cartItems;
    }
}
