<?php
/**
 * Description of ShowUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Users;


use Illuminate\Http\JsonResponse;

class ShowUserController extends BaseUserController
{
    public function __invoke(string $id): JsonResponse
    {
        $user = $this->getUsersService()->find($id);

        return response()->json(array_merge($user->toArray(),[
            'photo' => asset('storage/'. $user->photo)
        ]));
    }
}
