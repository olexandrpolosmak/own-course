<?php
/**
 * Description of CreateUserHandler.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Users\Handler;


use App\Models\User;
use App\Services\Users\DTO\StoreUserDTO;
use App\Services\Users\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class CreateUserHandler
{
    public function __construct(
        private readonly UserRepository $userRepository,
    ) {
    }

    public function handle(StoreUserDTO $dto): User
    {
        $passwordHash = Hash::make($dto->getPassword());
        $storeUserDTO = StoreUserDTO::fromArray(array_merge($dto->toArray(), [
            'password' => $passwordHash,
        ]));

        return $this->userRepository->create($storeUserDTO);
    }
}
