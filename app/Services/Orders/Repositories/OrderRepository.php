<?php
/**
 * Description of OrderRepostory.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\Repositories;


use App\Services\Orders\DTO\StoreOrderDTO;

interface OrderRepository
{
    public function create(StoreOrderDTO $dto): void;
}
