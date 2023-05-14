<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\Order
 *
 * @property string $id
 * @property string $user_id
 * @property string $company_id
 * @property float $totalPrice
 * @property string|null $note
 * @property string|null $address
 * @property int $deliveryType
 * @property int $timeToReceiving
 * @property mixed $cartItems
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Order whereAddress($value)
 * @method static Builder|Order whereCartItems($value)
 * @method static Builder|Order whereCompanyId($value)
 * @method static Builder|Order whereDeliveryType($value)
 * @method static Builder|Order whereNote($value)
 * @method static Builder|Order whereTimeToReceiving($value)
 * @mixin Eloquent
 */
class Order extends BaseModel
{
    public const DELIVERY_TYPE_TAKEAWAY = 0;
    public const DELIVERY_TYPE_DELIVERY = 10;

    public $timestamps = true;

    protected $guarded = [];

    protected $casts = [
        'cartItems' => 'array',
    ];
}
