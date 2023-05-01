<?php
/**
 * Description of StoreUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Users\DTO;


use Dots\Data\DTO;

class StoreUserDTO extends DTO
{
    protected string $name;
    protected string $phone;
    protected string $password;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
