<?php

namespace Sorethea\DdUser;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UserServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name("dd-user")
            ->hasMigration("alter_users_table");
    }
}
