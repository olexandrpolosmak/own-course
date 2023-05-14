<?php
/**
 * Description of OrderCartProduct.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\DTO;


use Dots\Data\DTO;

class OrderCartProduct extends DTO
{
    protected string $id;
    protected float $price;
    protected int $count;

    public function getId(): string
    {
        return $this->id;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCount(): int
    {
        return $this->count;
    }

}
