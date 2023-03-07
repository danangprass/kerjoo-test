<?php

namespace App\Providers;

use App\Repositories\AbsenceRepository;
use App\Repositories\Interfaces\AbsenceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AbsenceInterface::class, AbsenceRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
