<?php

namespace App\Providers;

use App\Interfaces\SensorRepositoryInterface;
use App\Repositories\SensorRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SensorRepositoryInterface::class,SensorRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
