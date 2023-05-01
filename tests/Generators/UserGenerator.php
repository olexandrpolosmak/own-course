<?php
/**
 * Description of UserGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Tests\Generators;


use App\Models\User;

class UserGenerator
{
    public static function generate(array $data = []): User
    {
        return User::factory()->create($data);
    }
}
