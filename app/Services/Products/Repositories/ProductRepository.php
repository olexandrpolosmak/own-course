<?php
/**
 * Description of ProductRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Products\Repositories;


use App\Models\Product;

interface ProductRepository
{
    public function find(int $id): ?Product;

    public function create();

}
