<?php
/**
 * Description of EloquentUserRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Users\Repositories;


use App\Models\User;
use App\Services\Users\DTO\StoreUserDTO;
use App\Services\Users\DTO\UpdateUserDTO;
use Illuminate\Support\Str;

class EloquentUserRepository implements UserRepository
{
    public function find(string $id): ?User
    {
        return User::find($id);
    }

    public function create(StoreUserDTO $dto): User
    {
        return User::query()->create(
            array_merge([
                'id' => Str::uuid()
            ], $dto->toArray()),
        );
    }

    public function update(User $user, UpdateUserDTO $dto): User
    {
        $user->fill($dto->toArray())->save();

        return $user;
    }

    public function delete(string $id): void
    {
        User::destroy($id);
    }
}
