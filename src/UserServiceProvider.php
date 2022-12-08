<?php

namespace Sorethea\DdUser;

use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UserServiceProvider extends PluginServiceProvider
{

    protected array $resources =[
        Filament\Resources\UserResource::class,
    ];
    public function configurePackage(Package $package): void
    {
        $package->name("dd-user")
            ->hasConfigFile("dd-user")
            ->hasMigration("alter_users_table");
    }
}
