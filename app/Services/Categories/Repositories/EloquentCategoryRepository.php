<?php
/**
 * Description of EloquentProductRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Categories\Repositories;


use App\Models\Category;
use App\Services\Categories\DTO\FormCategoryDTO;

class EloquentCategoryRepository implements CategoryRepository
{
    public function find(string $id): ?Category
    {
        return Category::find($id);
    }

    public function update(Category $product, FormCategoryDTO $dto): Category
    {
        $product->fill($this->mapFormDTOToDbData($dto))->save();
        return $product;
    }

    public function create(FormCategoryDTO $dto): Category
    {
        return Category::create($this->mapFormDTOToDbData($dto));
    }

    public function delete(string $id)
    {
        Category::destroy($id);
    }

    private function mapFormDTOToDbData(FormCategoryDTO $dto): array
    {
        return [
            'name' => $dto->getName(),
        ];
    }
}
