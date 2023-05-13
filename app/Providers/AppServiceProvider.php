<?php

namespace App\Providers;

use App\Services\Companies\Repositories\CompanyRepository;
use App\Services\Companies\Repositories\EloquentCompanyRepository;
use App\Services\Users\Repositories\EloquentUserRepository;
use App\Services\Users\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        UserRepository::class => EloquentUserRepository::class,
        CompanyRepository::class => EloquentCompanyRepository::class,
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
