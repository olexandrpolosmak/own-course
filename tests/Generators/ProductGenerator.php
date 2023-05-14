<?php
/**
 * Description of ProductGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Tests\Generators;


use App\Models\Product;

class ProductGenerator
{
    public static function generateWithCategory(): Product
    {
        $category = CategoryGenerator::generate();

        return self::generate([
            'category_id' => $category->id,
        ]);
    }

    public static function generate(array $data = []): Product
    {
        return Product::factory()->create($data);
    }
}
