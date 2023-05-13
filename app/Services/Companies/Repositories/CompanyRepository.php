<?php
/**
 * Description of CompanyRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Companies\Repositories;


use App\Models\Company;
use App\Services\Companies\DTO\CompanyFormDTO;

interface CompanyRepository
{
    public function find(int $id): ?Company;

    public function create(CompanyFormDTO $dto): Company;

    public function update(Company $company, CompanyFormDTO $dto): Company;

    public function delete(int $id): void;
}
