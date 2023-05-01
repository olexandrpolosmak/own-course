<?php
/**
 * Description of FirstValidator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Test;


use Closure;

class FirstValidator
{
    public function validate(int $value, Closure $next): int
    {
        dump('FirstValidator');

        return $next($value);
    }
}
