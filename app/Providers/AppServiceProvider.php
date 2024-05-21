<?php

namespace App\Providers;

use App\Models\peminjaman;
use App\Observers\PeminjamanObserver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function ($user) {
            return $user->role === 1;
        });

        Gate::define('user', function ($user) {
            return $user->role === 2;
        });

        peminjaman::observe(PeminjamanObserver::class);

    }
}
