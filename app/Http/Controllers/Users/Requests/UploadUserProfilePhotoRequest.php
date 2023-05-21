<?php
/**
 * Description of UploadUserProfilePhotoRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Users\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UploadUserProfilePhotoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'photo' => 'file',
        ];
    }
}
