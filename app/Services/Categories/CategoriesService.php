<?php
/**
 * Description of ProductsService.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Categories;


use App\Models\Category;
use App\Models\Product;
use App\Services\Categories\DTO\FormCategoryDTO;
use App\Services\Categories\Repositories\CategoryRepository;

class CategoriesService
{
    public function __construct(
        private readonly CategoryRepository $productRepository,
    ) {
    }

    public function find(string $id): ?Category
    {
        return $this->productRepository->find($id);
    }

    public function update(Category $product, FormCategoryDTO $dto): Category
    {
        return $this->productRepository->update($product, $dto);
    }

    public function create(FormCategoryDTO $dto): Product
    {
        return $this->productRepository->create($dto);
    }

    public function delete(string $id): void
    {
        $this->productRepository->delete($id);
    }
}
