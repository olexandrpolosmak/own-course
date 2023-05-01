<?php
/**
 * Description of UsersService.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Users;


use App\Models\User;
use App\Services\Users\DTO\StoreUserDTO;
use App\Services\Users\DTO\UpdateUserDTO;
use App\Services\Users\Handler\CreateUserHandler;
use App\Services\Users\Repositories\UserRepository;

class UsersService
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly CreateUserHandler $createUserHandler,
    ) {
    }

    public function find(int $id): ?User
    {
        return $this->userRepository->find($id);
    }

    public function create(StoreUserDTO $dto): User
    {
        return $this->createUserHandler->handle($dto);
    }

    public function update(User $user, UpdateUserDTO $dto): User
    {
        return $this->userRepository->update($user, $dto);
    }

    public function delete(int $id): void
    {
        $this->userRepository->delete($id);
    }
}
