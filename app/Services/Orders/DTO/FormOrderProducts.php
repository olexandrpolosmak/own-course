<?php
/**
 * Description of FormOrderItems.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\DTO;


use Illuminate\Support\Collection;

class FormOrderProducts extends Collection
{
    public static function fromArray(array $data): static
    {
        return new static(array_map(
            fn(array $item) => FormOrderProduct::fromArray($item),
            $data,
        ));
    }
}
