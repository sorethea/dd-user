<?php

namespace Sorethea\DdUser;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Sorethea\DdUser\Models\User;
use Sorethea\DdUser\Policies\UserPolicy;


class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        User::class => UserPolicy::class,
    ];

    public function boot()
    {
        //$this->registerPolicies();
    }
}
