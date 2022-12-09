<?php

namespace Sorethea\DdUser;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(Sorethea\DdUser\FilamentServiceProvider::class);
        $this->app->register(Sorethea\DdUser\AuthServiceProvider::class);
    }

    public function boot()
    {
    }
}
