<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('view-dashboard', function ($user) {
            return in_array($user->role_id, [0, 1, 2]); 
        });        
        Gate::define('manage-master-data', function ($user) {
            // return $user->role_id == 0; 
            return in_array($user->role_id, [0, 2]); 
        });

    }
    
}
