<?php

namespace Sorethea\DdUser\Filament\Resources\UserResource\Pages;

use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Sorethea\DdUser\Filament\Resources\UserResource;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
