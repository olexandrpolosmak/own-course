<?php
/**
 * Description of BaseUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Categories;


use App\Http\Controllers\Controller;
use App\Services\Categories\CategoriesService;

abstract class BaseCategoriesController extends Controller
{
    protected function getCategoriesService(): CategoriesService
    {
        return app(CategoriesService::class);
    }
}
