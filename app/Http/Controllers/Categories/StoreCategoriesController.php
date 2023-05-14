<?php
/**
 * Description of StoreUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Categories;


use App\Http\Controllers\Categories\Requests\FormCategoryRequest;
use Illuminate\Http\JsonResponse;

class StoreCategoriesController extends BaseCategoriesController
{
    public function __invoke(FormCategoryRequest $request): JsonResponse
    {
        $category = $this->getCategoriesService()->create($request->getDTO());

        return response()->json($category);
    }
}
