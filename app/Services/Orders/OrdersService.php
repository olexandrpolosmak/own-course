<?php
/**
 * Description of OrdersService.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders;


use App\Services\Orders\DTO\Form\FormOrderDTO;
use App\Services\Orders\Handlers\CreateOrderHandler;

class OrdersService
{
    public function __construct(
        private readonly CreateOrderHandler $createOrderHandler,
    ) {
    }

    public function create(FormOrderDTO $dto): void
    {
        $this->createOrderHandler->handle($dto);
    }
}
