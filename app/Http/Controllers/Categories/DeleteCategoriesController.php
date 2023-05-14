<?php
/**
 * Description of DeleteUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Categories;


use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DeleteCategoriesController extends BaseCategoriesController
{
    public function __invoke(string $id): JsonResponse
    {
        $this->getCategoriesService()->delete($id);

        return response()->json([
            'message' => 'ok',
        ], Response::HTTP_NO_CONTENT);
    }
}
