<?php

namespace Sorethea\DdUser\Filament\Resources\UserResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Sorethea\DdUser\Filament\Resources\UserResource;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
