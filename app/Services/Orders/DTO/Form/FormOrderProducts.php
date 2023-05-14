<?php
/**
 * Description of FormOrderItems.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\DTO\Form;


use Illuminate\Support\Collection;

/**
 * @method FormOrderProduct[] all()
 */
class FormOrderProducts extends Collection
{
    public static function fromArray(array $data): static
    {
        return new static(array_map(
            fn(array $item) => FormOrderProduct::fromArray($item),
            $data,
        ));
    }

    public function getIds(): array
    {
        return $this->map(
            fn(FormOrderProduct $formOrderProduct) => $formOrderProduct->getId(),
        )->toArray();
    }
}
