<?php
/**
 * Description of UpdateUserDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Users\DTO;


use Dots\Data\DTO;

class UpdateUserDTO extends DTO
{
    protected string $name;
    protected string $phone;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}
