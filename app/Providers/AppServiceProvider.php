<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepositoriesInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoriesInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
