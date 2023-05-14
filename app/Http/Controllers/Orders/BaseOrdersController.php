<?php
/**
 * Description of BaseOrdersController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Orders;


use App\Http\Controllers\Controller;
use App\Services\Orders\OrdersService;

abstract class BaseOrdersController extends Controller
{
    protected function getOrdersService(): OrdersService
    {
        return app(OrdersService::class);
    }
}
