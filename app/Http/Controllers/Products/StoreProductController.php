<?php
/**
 * Description of StoreUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Products;


use App\Http\Controllers\Products\Requests\FormProductRequest;
use Illuminate\Http\JsonResponse;

class StoreProductController extends BaseProductController
{
    public function __invoke(FormProductRequest $request): JsonResponse
    {
        $product = $this->getProductsService()->create($request->getDTO());

        return response()->json($product);
    }
}
