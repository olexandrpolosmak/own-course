<?php
/**
 * Description of FormProductDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Products\DTO;


use Dots\Data\DTO;

class FormProductDTO extends DTO
{
    protected string $name;
    protected ?string $description;
    protected string $imageUrl;
    protected string $categoryId;
    protected float $price;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
