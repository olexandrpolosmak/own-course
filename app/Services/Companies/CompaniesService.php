<?php
/**
 * Description of CompaniesService.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Companies;


use App\Models\Company;
use App\Services\Companies\DTO\CompanyFormDTO;
use App\Services\Companies\Repositories\CompanyRepository;

class CompaniesService
{
    public function __construct(
        private readonly CompanyRepository $repository,
    ) {
    }

    public function find(int $id): ?Company
    {
        return $this->repository->find($id);
    }

    public function create(CompanyFormDTO $dto): Company
    {
        return $this->repository->create($dto);
    }

    public function update(Company $company, CompanyFormDTO $dto): Company
    {
        return $this->repository->update($company, $dto);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}
