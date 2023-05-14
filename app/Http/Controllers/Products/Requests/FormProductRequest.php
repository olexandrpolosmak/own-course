<?php
/**
 * Description of StoreUserRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Products\Requests;


use App\Services\Products\DTO\FormProductDTO;
use Illuminate\Foundation\Http\FormRequest;

class FormProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'categoryId' => 'required|uuid',
            'imageUrl' => 'required|string',
            'description' => 'nullable|string',
        ];
    }

    public function getDTO(): FormProductDTO
    {
        return FormProductDTO::fromArray([
            'name' => $this->validated('name'),
            'price' => $this->validated('price'),
            'categoryId' => $this->validated('categoryId'),
            'imageUrl' => $this->validated('imageUrl'),
            'description' => $this->validated('description'),
        ]);
    }
}
