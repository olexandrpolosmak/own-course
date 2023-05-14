<?php
/**
 * Description of ProductRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Categories\Repositories;


use App\Models\Category;
use App\Services\Categories\DTO\FormCategoryDTO;

interface CategoryRepository
{
    public function find(string $id): ?Category;

    public function update(Category $product, FormCategoryDTO $dto): Category;

    public function create(FormCategoryDTO $dto): Category;

    public function delete(string $id);
}
