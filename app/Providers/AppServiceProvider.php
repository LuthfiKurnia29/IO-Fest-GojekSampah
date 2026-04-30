<?php

namespace App\Providers;

use App\Services\Implementations\BookingService;
use App\Services\Implementations\TaskService;
use App\Services\Interfaces\IBookingService;
use App\Services\Interfaces\ITaskService;
use App\Services\Interfaces\ITransactionService;
use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\IUserService;
use App\Services\Implementations\UserService;
use App\Services\Interfaces\IJenisSampahService;
use App\Services\Implementations\JenisSampahService;
use App\Services\Implementations\TransactionService;
use App\Services\Interfaces\ICatalogService;
use App\Services\Implementations\CatalogService;

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
        $this->app->bind(ITransactionService::class, TransactionService::class);
        $this->app->bind(ICatalogService::class, CatalogService::class);
        $this->app->bind(IBookingService::class, BookingService::class);
        $this->app->bind(ITaskService::class, TaskService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
