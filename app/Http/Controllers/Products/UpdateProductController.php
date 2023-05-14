<?php
/**
 * Description of UpdateUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Products;


use App\Http\Controllers\Products\Requests\FormProductRequest;
use Illuminate\Http\JsonResponse;

class UpdateProductController extends BaseProductController
{
    public function __invoke(FormProductRequest $request, string $id): JsonResponse
    {
        $product = $this->getProductsService()->find($id);
        $product = $this->getProductsService()->update($product, $request->getDTO());

        return response()->json($product);
    }
}
