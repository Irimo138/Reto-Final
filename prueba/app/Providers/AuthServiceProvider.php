<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        $this->registerPolicies();
 
        /* definir el rol de administrador */
        Gate::define('isAdmin', function($users) {
           return $users->rol == 'Administrador';
        });

        /* definir el rol de usuario */
        Gate::define('isUser', function($users) {
            return $users->rol == 'Usuario';
        });
 
        /* definir el rol de usuario */
        Gate::define('isPicUser', function($users) {
            return $users->rol == 'UsuarioPic';
        });
        
    }
}
