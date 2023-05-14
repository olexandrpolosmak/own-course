<?php
/**
 * Description of StoreUserRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Categories\Requests;


use App\Services\Categories\DTO\FormCategoryDTO;
use Illuminate\Foundation\Http\FormRequest;

class FormCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
        ];
    }

    public function getDTO(): FormCategoryDTO
    {
        return FormCategoryDTO::fromArray([
            'name' => $this->validated('name'),
        ]);
    }
}
