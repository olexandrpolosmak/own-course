<?php
/**
 * Description of BaseUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Products;


use App\Http\Controllers\Controller;
use App\Services\Products\ProductsService;

abstract class BaseProductController extends Controller
{
    protected function getProductsService(): ProductsService
    {
        return app(ProductsService::class);
    }
}
