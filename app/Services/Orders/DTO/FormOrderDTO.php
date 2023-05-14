<?php
/**
 * Description of FormOrderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\DTO;


use Dots\Data\DTO;

class FormOrderDTO extends DTO
{
    protected string $userId;
    protected string $companyId;
    protected ?string $address;
    protected int $deliveryType;
    protected ?string $note;
    protected int $timeToReceiving;
    protected FormOrderProducts $cartItems;

    public static function fromArray(array $data): static
    {
        $data['cartItems'] = FormOrderProducts::fromArray($data['cartItems'] ?? []);
        return parent::fromArray($data);
    }

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

    public function getCartItems(): FormOrderProducts
    {
        return $this->cartItems;
    }
}
