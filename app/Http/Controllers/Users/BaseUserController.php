<?php
/**
 * Description of BaseUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Users;


use App\Http\Controllers\Controller;
use App\Services\Users\UsersService;

abstract class BaseUserController extends Controller
{
    protected function getUsersService(): UsersService
    {
        return app(UsersService::class);
    }
}
