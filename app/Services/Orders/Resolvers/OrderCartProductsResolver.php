<?php
/**
 * Description of OrderCartProductsResolver.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Orders\Resolvers;


use App\Models\Product;
use App\Services\Orders\DTO\Form\FormOrderProducts;
use App\Services\Orders\DTO\OrderCartProduct;
use App\Services\Orders\DTO\OrderCartProducts;
use App\Services\Products\ProductsService;
use Illuminate\Support\Collection;

class OrderCartProductsResolver
{
    public function __construct(
        private readonly ProductsService $productsService,
    ) {
    }

    public function resolve(FormOrderProducts $formOrderProducts): OrderCartProducts
    {
        $data = [];
        $formOrderProductIds = $formOrderProducts->getIds();
        $productModels = $this->productsService->getByIds($formOrderProductIds);

        foreach ($formOrderProducts->all() as $formOrderProduct) {
            $productModel = $this->findProductModel($productModels, $formOrderProduct->getId());
            if (!$productModel) {
                continue;
            }

            $data[] = OrderCartProduct::fromArray([
                'id' => $productModel->id,
                'price' => $productModel->price,
                'count' => $formOrderProduct->getCount(),
            ])->toArray();
        }

        return OrderCartProducts::fromArray($data);
    }

    private function findProductModel(Collection $productModels, string $id): ?Product
    {
        return $productModels->first(
            fn(Product $product) => $product->id === $id,
        );
    }
}
