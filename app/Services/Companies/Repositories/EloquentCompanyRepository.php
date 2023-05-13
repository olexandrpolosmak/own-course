<?php
/**
 * Description of EloquentCompanyRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Companies\Repositories;


use App\Models\Company;
use App\Services\Companies\DTO\CompanyFormDTO;

class EloquentCompanyRepository implements CompanyRepository
{
    public function find(int $id): ?Company
    {
        return Company::find($id);
    }

    public function create(CompanyFormDTO $dto): Company
    {
        return Company::create($dto->toArray());
    }

    public function update(Company $company, CompanyFormDTO $dto): Company
    {
        $company->fill($dto->toArray())->save();
        return $company;
    }

    public function delete(int $id): void
    {
        Company::destroy($id);
    }
}
