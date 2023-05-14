<?php
/**
 * Description of ShowUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Categories;


use Illuminate\Http\JsonResponse;

class ShowCategoriesController extends BaseCategoriesController
{
    public function __invoke(string $id): JsonResponse
    {
        $category = $this->getCategoriesService()->find($id);

        return response()->json($category);
    }
}
