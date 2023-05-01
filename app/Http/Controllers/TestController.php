<?php
/**
 * Description of TestController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers;


use App\Services\Test\FirstValidator;
use App\Services\Test\SecondValidator;
use Illuminate\Pipeline\Pipeline;

class TestController
{
    public function __invoke()
    {
        $value = 1;
        try {
            app(Pipeline::class)
                ->send($value)
                ->through([FirstValidator::class, SecondValidator::class])
                ->via('validate')
                ->then(function ($value) {
                   dd($value);
                });
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
