<?php
/**
 * Description of EloquentOrderRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\Repositories;


use App\Models\Order;
use App\Services\Orders\DTO\StoreOrderDTO;

class EloquentOrderRepository implements OrderRepository
{
    public function create(StoreOrderDTO $dto): void
    {
        Order::create([
            'user_id' => $dto->getUserId(),
            'company_id' => $dto->getCompanyId(),
            'address' => $dto->getAddress(),
            'deliveryType' => $dto->getDeliveryType(),
            'note' => $dto->getNote(),
            'timeToReceiving' => $dto->getTimeToReceiving(),
            'totalPrice' => $dto->getTotalPrice(),
            'cartItems' => $dto->getCartItems(),
        ]);
    }
}
