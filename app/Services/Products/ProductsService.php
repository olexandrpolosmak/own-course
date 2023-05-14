<?php
/**
 * Description of ProductsService.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Products;


use App\Models\Product;
use App\Services\Products\DTO\FormProductDTO;
use App\Services\Products\Repositories\ProductRepository;

class ProductsService
{
    public function __construct(
        private readonly ProductRepository $productRepository,
    ) {
    }

    public function find(string $id): ?Product
    {
        return $this->productRepository->find($id);
    }

    public function update(Product $product, FormProductDTO $dto): Product
    {
        return $this->productRepository->update($product, $dto);
    }

    public function create(FormProductDTO $dto): Product
    {
        return $this->productRepository->create($dto);
    }

    public function delete(string $id): void
    {
        $this->productRepository->delete($id);
    }
}
