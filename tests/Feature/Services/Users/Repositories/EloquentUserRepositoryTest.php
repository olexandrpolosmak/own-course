<?php
/**
 * Description of EloquentUserRepositoryTest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Tests\Feature\Services\Users\Repositories;


use App\Models\User;
use App\Services\Users\DTO\StoreUserDTO;
use App\Services\Users\DTO\UpdateUserDTO;
use App\Services\Users\Repositories\EloquentUserRepository;
use Tests\Generators\UserGenerator;
use Tests\TestCase;

class EloquentUserRepositoryTest extends TestCase
{
    private function getEloquentUserRepository(): EloquentUserRepository
    {
        return app(EloquentUserRepository::class);
    }

    public function testFindExpectsNull(): void
    {
        $user = $this->getEloquentUserRepository()->find($this->generateUuid());
        $this->assertNull($user);
    }

    public function testFindUser(): void
    {
        $model = UserGenerator::generate();
        $user = $this->getEloquentUserRepository()->find($model->id);
        $this->assertEquals($model->id, $user->id);
    }

    public function testStoreExpectsOk(): void
    {
        $dto = StoreUserDTO::fromArray([
            'name' => 'name',
            'phone' => 'phone',
            'password' => 'password'
        ]);
        $this->getEloquentUserRepository()->create($dto);

        $model = User::where('name', $dto->getName())->first();

        $this->assertEquals($dto->getPhone(), $model->phone);
        $this->assertEquals($dto->getPassword(), $model->password);
    }

    public function testUpdateExpectsOk(): void
    {
        $user = UserGenerator::generate();
        $dto = UpdateUserDTO::fromArray([
            'name' => 'custom_name',
            'phone' => $user->phone,
        ]);
        $this->getEloquentUserRepository()->update($user, $dto);

        $user->refresh();

        $this->assertEquals($dto->getName(), $user->name);
    }

    public function testUpdateExpectsOldPassword(): void
    {
        $user = UserGenerator::generate();
        $dto = UpdateUserDTO::fromArray([
            'name' => 'custom_name',
            'phone' => $user->phone,
        ]);
        $password = $user->password;
        $this->getEloquentUserRepository()->update($user, $dto);

        $user->refresh();

        $this->assertEquals($password, $user->password);
    }

    public function testDeleteExpectsOk(): void
    {
        $user = UserGenerator::generate();
        $this->getEloquentUserRepository()->delete($user->id);

        $this->assertNull($user->fresh());
    }
}
