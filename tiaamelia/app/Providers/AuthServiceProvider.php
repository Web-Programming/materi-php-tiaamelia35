<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    //untuk mengelola product hanya dilakukan oleh Admin
        Gate::define('manage-products', function ($user) { return $user->role === 'admin';
        });


        //untuk update product dpt dilakukan Admin dan Sales
        Gate::define('update-products', function (User $user) { return $user->role === 'admin' || $user->role === 'sales';
        });


        //untuk delete product dpt dilakukan Admin
        Gate::define('delete-products', function (User $user) { return $user->role === 'admin';
        });


        //untuk create product dpt dilakukan Admin oleh user yang sudah login
        Gate::define('create-products', function (User $user) { return $user !== null;
        });
        
    }
}
