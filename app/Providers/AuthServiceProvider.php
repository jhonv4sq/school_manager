<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
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

        // Verifica si el usuario no es un estudiante solo le da acceso al profesor y al director.
        Gate::define('confirm-master', function (User $user){
            $id = $user->rol->first()->id;
            return in_array($id, [2,3]);
        });
        // Solo verifica si el usuario es un director.
        Gate::define('confirm-principal', function (User $user){
            return $user->rol->first()->id == 3;
        });

    }
}
