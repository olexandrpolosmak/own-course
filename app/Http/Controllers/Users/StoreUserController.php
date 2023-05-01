<?php
/**
 * Description of StoreUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Users;


use App\Http\Controllers\Users\Requests\StoreUserRequest;
use Illuminate\Http\JsonResponse;

class StoreUserController extends BaseUserController
{
    public function __invoke(StoreUserRequest $request): JsonResponse
    {
        $user = $this->getUsersService()->create($request->getDTO());

        return response()->json($user);
    }
}
