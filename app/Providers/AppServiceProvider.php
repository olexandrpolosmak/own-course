<?php

namespace App\Providers;

use App\Services\Categories\Repositories\CategoryRepository;
use App\Services\Categories\Repositories\EloquentCategoryRepository;
use App\Services\Companies\Repositories\CompanyRepository;
use App\Services\Companies\Repositories\EloquentCompanyRepository;
use App\Services\Products\Repositories\EloquentProductRepository;
use App\Services\Products\Repositories\ProductRepository;
use App\Services\Users\Repositories\EloquentUserRepository;
use App\Services\Users\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        UserRepository::class => EloquentUserRepository::class,
        CompanyRepository::class => EloquentCompanyRepository::class,
        ProductRepository::class => EloquentProductRepository::class,
        CategoryRepository::class => EloquentCategoryRepository::class
    ];


    public function register(): void
    {
        Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
