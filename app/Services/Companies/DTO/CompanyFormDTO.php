<?php
/**
 * Description of CompanyFormDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Companies\DTO;


use Dots\Data\DTO;

class CompanyFormDTO extends DTO
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }
}
