<?php
/**
 * Description of ShowUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Products;


use Illuminate\Http\JsonResponse;

class ShowProductController extends BaseProductController
{
    public function __invoke(string $id): JsonResponse
    {
        $product = $this->getProductsService()->find($id);

        return response()->json($product);
    }
}
