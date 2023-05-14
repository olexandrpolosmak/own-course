<?php
/**
 * Description of OrderItem.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\DTO\Form;


use Dots\Data\DTO;

class FormOrderProduct extends DTO
{
    protected string $id;
    protected int $count;

    public function getId(): string
    {
        return $this->id;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
