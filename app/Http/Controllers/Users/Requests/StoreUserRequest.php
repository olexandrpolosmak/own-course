<?php
/**
 * Description of StoreUserRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Users\Requests;


use App\Services\Users\DTO\StoreUserDTO;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'string',
            'phone' => 'string',
            'password' => 'string',
        ];
    }

    public function getDTO(): StoreUserDTO
    {
        return StoreUserDTO::fromArray([
            'name' => $this->validated('name'),
            'phone' => $this->validated('phone'),
            'password' => $this->validated('password'),
        ]);
    }
}
