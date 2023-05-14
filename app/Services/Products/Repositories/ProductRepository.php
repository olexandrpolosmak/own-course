<?php
/**
 * Description of ProductRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Products\Repositories;


use App\Models\Product;
use App\Services\Products\DTO\FormProductDTO;
use Illuminate\Support\Collection;

interface ProductRepository
{
    public function find(string $id): ?Product;

    public function update(Product $product, FormProductDTO $dto): Product;

    public function create(FormProductDTO $dto): Product;

    public function delete(string $id);

    public function getByIds(array $ids): Collection;
}
