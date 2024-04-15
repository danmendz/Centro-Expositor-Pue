<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User; 
use Illuminate\Support\Facades\Gate;

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
        $this->registerPolicies();

        Gate::define('acceder-admin', function ($user) {
            return $user->role === User::ROLE_ADMINISTRADOR;
        });

        Gate::define('acceder-cliente', function ($user) {
            return $user->role === User::ROLE_CLIENTE;
        });

        Gate::define('acceder-usuario', function ($user) {
            return $user->role === User::ROLE_USUARIO;
        });

        // // administrador
        // Gate::define('see-users', fn(User $user) => 
        //     $user->role == User::ROLE_ADMINISTRADOR
        // );

        // Gate::define('admin-index', fn(User $user) => 
        //     $user->role == User::ROLE_ADMINISTRADOR
        // );
 
        // // cliente
        // Gate::define('see-events', fn(User $user) =>
        //     $user->role == User::ROLE_CLIENTE
        // );

        // Gate::define('cliente-index', fn(User $user) => 
        //     $user->role == User::ROLE_CLIENTE
        // );

        // //usuario
        // Gate::define('usuario-index', fn(User $user) => 
        //     $user->role == User::ROLE_USUARIO
        // );
    }
}
