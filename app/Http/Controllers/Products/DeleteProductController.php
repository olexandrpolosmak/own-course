<?php
/**
 * Description of DeleteUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Products;


use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DeleteProductController extends BaseProductController
{
    public function __invoke(string $id): JsonResponse
    {
        $this->getProductsService()->delete($id);

        return response()->json([
            'message' => 'ok',
        ], Response::HTTP_NO_CONTENT);
    }
}
