<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Menu;
use App\Models\User;
use App\Policies\MenuPolicy;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
//        Menu::class=>MenuPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        \Illuminate\Support\Facades\Gate::define('admin',function ($user){
            if ($user['rule']=='admin'){
                return true;
            }else{
                return false;
            }
        });
    }
}
