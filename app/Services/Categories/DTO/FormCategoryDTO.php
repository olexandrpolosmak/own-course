<?php
/**
 * Description of FormProductDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Categories\DTO;


use Dots\Data\DTO;

class FormCategoryDTO extends DTO
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }
}
