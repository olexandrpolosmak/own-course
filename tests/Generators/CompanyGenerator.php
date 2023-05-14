<?php
/**
 * Description of CompanyGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Tests\Generators;


use App\Models\Company;

class CompanyGenerator
{
    public static function generate(array $data = []): Company
    {
        return Company::factory()->create($data);
    }
}
