<?php

namespace Sorethea\DdUser;

use Sorethea\DdUser\Filament\Resources\UserResource;
use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UserServiceProvider extends PluginServiceProvider
{

    protected array $resources =[
        UserResource::class,
    ];
    public function configurePackage(Package $package): void
    {
        $package->name("dd-user")
            ->hasConfigFile("dd-user")
            ->hasMigration("alter_users_table");
    }
}
