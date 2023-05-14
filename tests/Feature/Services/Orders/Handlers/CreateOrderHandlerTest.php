<?php
/**
 * Description of CreateOrderHandlerTest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Tests\Feature\Services\Orders\Handlers;


use App\Models\Order;
use App\Services\Orders\DTO\Form\FormOrderDTO;
use App\Services\Orders\Handlers\CreateOrderHandler;
use Tests\Generators\CompanyGenerator;
use Tests\Generators\ProductGenerator;
use Tests\TestCase;

class CreateOrderHandlerTest extends TestCase
{
    private function getCreateOrderHandler(): CreateOrderHandler
    {
        return app(CreateOrderHandler::class);
    }

    public function testExpectsOk(): void
    {
        $product = ProductGenerator::generateWithCategory();
        $company = CompanyGenerator::generate();
        $formOrderDTO = FormOrderDTO::fromArray([
            'userId' => $this->generateUuid(),
            'companyId' => $company->id,
            'address' => $this->generateUuid(),
            'deliveryType' => Order::DELIVERY_TYPE_TAKEAWAY,
            'note' => null,
            'timeToReceiving' => time() + 100,
            'cartItems' => [
                [
                    'id' => $product->id,
                    'count' => 1,
                ]
            ],
        ]);

        $this->getCreateOrderHandler()->handle($formOrderDTO);
        $model = Order::first();
        $this->assertEquals($product->price, $model->totalPrice);
    }
}
