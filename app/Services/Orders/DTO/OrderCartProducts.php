<?php
/**
 * Description of OrderCartProducts.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\DTO;


use Illuminate\Support\Collection;

/**
 * @method OrderCartProduct[] all()
 */
class OrderCartProducts extends Collection
{
    public static function fromArray(array $data = []): static
    {
        return new static(
            array_map(
                fn(array $item) => OrderCartProduct::fromArray($item),
                $data,
            )
        );
    }

}
