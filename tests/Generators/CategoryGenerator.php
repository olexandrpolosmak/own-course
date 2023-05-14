<?php
/**
 * Description of CategoryGe.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Tests\Generators;


use App\Models\Category;

class CategoryGenerator
{
    public static function generate(): Category
    {
        return Category::factory()->create();
    }
}
