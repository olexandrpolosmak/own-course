<?php
/**
 * Description of EloquentProductRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Products\Repositories;


use App\Models\Product;
use App\Services\Products\DTO\FormProductDTO;
use Illuminate\Support\Collection;

class EloquentProductRepository implements ProductRepository
{
    public function find(string $id): ?Product
    {
        return Product::find($id);
    }

    public function update(Product $product, FormProductDTO $dto): Product
    {
        $product->fill($this->mapFormDTOToDbData($dto))->save();
        return $product;
    }

    public function create(FormProductDTO $dto): Product
    {
        return Product::create($this->mapFormDTOToDbData($dto));
    }

    public function delete(string $id)
    {
        Product::destroy($id);
    }

    private function mapFormDTOToDbData(FormProductDTO $dto): array
    {
        return [
            'name' => $dto->getName(),
            'price' => $dto->getPrice(),
            'category_id' => $dto->getCategoryId(),
            'image_url' => $dto->getImageUrl(),
            'description' => $dto->getDescription(),
        ];
    }

    public function getByIds(array $ids): Collection
    {
        return Product::query()
            ->whereIn('id', $ids)
            ->get();
    }
}
