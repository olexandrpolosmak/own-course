<?php
/**
 * Description of UserRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Users\Repositories;


use App\Models\User;
use App\Services\Users\DTO\StoreUserDTO;
use App\Services\Users\DTO\UpdateUserDTO;

interface UserRepository
{
    public function find(int $id): ?User;

    public function create(StoreUserDTO $dto): User;

    public function update(User $user, UpdateUserDTO $dto): User;

    public function delete(int $id): void;
}
