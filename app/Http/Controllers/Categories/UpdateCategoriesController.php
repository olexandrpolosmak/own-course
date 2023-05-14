<?php
/**
 * Description of UpdateUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Categories;


use App\Http\Controllers\Categories\Requests\FormCategoryRequest;
use Illuminate\Http\JsonResponse;

class UpdateCategoriesController extends BaseCategoriesController
{
    public function __invoke(FormCategoryRequest $request, string $id): JsonResponse
    {
        $category = $this->getCategoriesService()->find($id);
        $category = $this->getCategoriesService()->update($category, $request->getDTO());

        return response()->json($category);
    }
}
