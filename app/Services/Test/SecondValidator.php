<?php
/**
 * Description of SecoundValidator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Test;


use Closure;
use Exception;

class SecondValidator
{
    public function validate(int $value, Closure $next): int
    {
        if ($value >= 1) {
            return $next($value);
        } else if ($value ===0 ){
            return $next($value);
        }
        throw new Exception('second validator exception');
    }
}
