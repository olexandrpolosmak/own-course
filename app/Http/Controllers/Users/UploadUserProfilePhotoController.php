<?php
/**
 * Description of UploadUserProfilePhoto.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Users;


use App\Http\Controllers\Users\Requests\UploadUserProfilePhotoRequest;
use App\Services\Utils\ImageUploader;
use Illuminate\Http\JsonResponse;
use Ramsey\Uuid\Uuid;

class UploadUserProfilePhotoController extends BaseUserController
{
    private function getImageUploader(): ImageUploader
    {
        return app(ImageUploader::class);
    }

    public function __invoke(UploadUserProfilePhotoRequest $request, string $userId): JsonResponse
    {
        $user = $this->getUsersService()->findOrFail($userId);
        $photo = $request->file('photo');
        $photoName = Uuid::uuid7()->toString().'.png';

        $this->getImageUploader()->upload($photo, $photoName);
        $user->photo = $photoName;
        $user->save();
        return $this->responseOk();
    }
}
