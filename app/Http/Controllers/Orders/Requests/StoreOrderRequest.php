<?php
/**
 * Description of StoreOrderRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Orders\Requests;


use App\Models\Order;
use App\Services\Orders\DTO\FormOrderDTO;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'userId' => 'required|string',
            'companyId' => 'required|string',
            'address' => 'nullable|string',
            'deliveryType' => [
                'required',
                Rule::in([
                    Order::DELIVERY_TYPE_DELIVERY,
                    Order::DELIVERY_TYPE_TAKEAWAY,
                ])
            ],
            'timeToReceiving' => 'required|numeric',
            'cartItems' => 'array',
            'cartItems.*.id' => 'required|string',
            'cartItems.*.count' => 'required|numeric|min:1',
        ];
    }

    public function getDTO(): FormOrderDTO
    {
        return FormOrderDTO::fromArray([
            'userId' => $this->validated('userId'),
            'companyId' => $this->validated('companyId'),
            'address' => $this->validated('address'),
            'deliveryType' => $this->validated('deliveryType'),
            'timeToReceiving' => $this->validated('timeToReceiving'),
            'cartItems' => $this->validated('cartItems'),
        ]);
    }
}
