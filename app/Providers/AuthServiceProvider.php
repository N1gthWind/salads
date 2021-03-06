<?php

namespace App\Providers;

use App\Models\Salad;
use App\Models\User;
use App\Policies\SaladPolicy;
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
        
        Gate::define('update-post', function (User $user, Salad $post) {
            return $user->id === $post->user_id;
        });

        Gate::define('posts.update',[SaladPolicy::class,'update']);


        
    }
}
