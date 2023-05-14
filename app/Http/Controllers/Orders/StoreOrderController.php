<?php
/**
 * Description of StoreOrderController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Orders;


use App\Http\Controllers\Orders\Requests\StoreOrderRequest;
use Illuminate\Http\JsonResponse;

class StoreOrderController extends BaseOrdersController
{
    public function __invoke(StoreOrderRequest $request): JsonResponse
    {
        $this->getOrdersService()->create($request->getDTO());

        return $this->responseOk();
    }
}
