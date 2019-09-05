<?php

namespace App\Providers;

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
		 \App\Models\News::class => \App\Policies\NewsPolicy::class,
		 \App\Models\Hotel::class => \App\Policies\HotelPolicy::class,
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

        //
        \admin::auth(function ($request) {
            // whether is founder
            return \Auth::user()->hasRole('Founder');
        });
    }
}
