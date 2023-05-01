<?php
/**
 * Description of CreateUserHandlerTest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Tests\Feature\Services\Users\Handlers;


use App\Models\User;
use App\Services\Users\DTO\StoreUserDTO;
use App\Services\Users\Handler\CreateUserHandler;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CreateUserHandlerTest extends TestCase
{
    private function getCreateUserHandler(): CreateUserHandler
    {
        return app(CreateUserHandler::class);
    }

    public function testCreateExpectsPasswordHashed(): void
    {
        $dto = StoreUserDTO::fromArray([
            'name' => 'name',
            'phone' => 'phone',
            'password' => 'password'
        ]);

        $this->getCreateUserHandler()->handle($dto);
        $model = User::where('name', $dto->getName())->first();

        $this->assertTrue(Hash::check($dto->getPassword(), $model->password));
    }
}
