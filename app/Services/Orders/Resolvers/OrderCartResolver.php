<?php
/**
 * Description of OrderCartFromFormOrderDTOResolver.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\Resolvers;


use App\Services\Orders\DTO\Form\FormOrderDTO;
use App\Services\Orders\Entities\OrderCart;

class OrderCartResolver
{
    public function __construct(
        private readonly OrderCartProductsResolver $orderCartProductsResolver,
    ) {
    }

    public function resolve(FormOrderDTO $formOrderDTO): OrderCart
    {
        return OrderCart::fromArray([
            'userId' => $formOrderDTO->getUserId(),
            'companyId' => $formOrderDTO->getCompanyId(),
            'address' => $formOrderDTO->getAddress(),
            'deliveryType' => $formOrderDTO->getDeliveryType(),
            'note' => $formOrderDTO->getNote(),
            'timeToReceiving' => $formOrderDTO->getTimeToReceiving(),
            'cartItems' => $this->orderCartProductsResolver->resolve($formOrderDTO->getCartItems()),
        ]);
    }
}
