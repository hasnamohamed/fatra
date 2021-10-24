<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
    public function boot()
    {
        $this->registerPolicies();
        Gate::before(function ($user) {
            return $user->isSuperAdmin() ? true :null;
        });
        Gate::define('view-control', function ($user,$post) {
            return $user->id === $post->user->id;
        });

        Gate::define('view-user', function ($user,$user1) {
            return $user->id === $user1->id;
        });

        Gate::define('admin-perm', function ($user,$user1) {
            return $user->id === $user1->id &&$user1->role=='admin';
        });
    }
}
