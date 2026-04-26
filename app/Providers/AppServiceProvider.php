<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\IUserService;
use App\Services\Implementations\UserService;
use App\Services\Interfaces\IJenisSampahService;
use App\Services\Implementations\JenisSampahService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(IUserService::class, UserService::class);
        $this->app->bind(IJenisSampahService::class, JenisSampahService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
