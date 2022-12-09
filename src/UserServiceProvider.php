<?php

namespace Sorethea\DdUser;

use Illuminate\Support\ServiceProvider;
use Sorethea\DdUser\FilamentServiceProvider;
use Sorethea\DdUser\AuthServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(FilamentServiceProvider::class);
        $this->app->register(AuthServiceProvider::class);
    }

    public function boot()
    {
    }
}
