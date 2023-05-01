<?php

namespace App\Providers;

use App\Services\Users\Repositories\EloquentUserRepository;
use App\Services\Users\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        UserRepository::class => EloquentUserRepository::class,
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
