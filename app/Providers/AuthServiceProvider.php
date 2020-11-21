<?php

namespace App\Providers;

use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        Gate::define('Admin', function (User $user) {
            return Auth::user()->user_role == 'admin';
        });

        Gate::define('Teacher', function (User $user) {
            return Auth::user()->user_role == 'teacher';
        });

        Gate::define('Student', function ($user) {
            return Auth::user()->user_role == 'student';
        });

        Gate::define('Parent', function ($user) {
            return Auth::user()->user_role == 'parent';
        });
    }


}
