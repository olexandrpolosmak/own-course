<?php
/**
 * Description of CreateOrderHandler.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\Handlers;


use App\Services\Orders\DTO\Form\FormOrderDTO;
use App\Services\Orders\DTO\StoreOrderDTO;
use App\Services\Orders\Repositories\OrderRepository;
use App\Services\Orders\Resolvers\OrderCartResolver;

class CreateOrderHandler
{
    public function __construct(
        private readonly OrderCartResolver $orderCartResolver,
        private readonly OrderRepository $orderRepository,
    ) {
    }

    public function handle(FormOrderDTO $dto): void
    {
        $orderCart = $this->orderCartResolver->resolve($dto);
        $storeOrderDTO = StoreOrderDTO::fromArray([
            'userId' => $orderCart->getUserId(),
            'companyId' => $orderCart->getCompanyId(),
            'address' => $orderCart->getAddress(),
            'deliveryType' => $orderCart->getDeliveryType(),
            'note' => $orderCart->getNote(),
            'timeToReceiving' => $orderCart->getTimeToReceiving(),
            'totalPrice' => $orderCart->resolvePrice(),
            'cartItems' => $orderCart->getCartItems()->toArray(),
        ]);

        $this->orderRepository->create($storeOrderDTO);
    }
}
