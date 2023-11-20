<?php

namespace App\Filament\Resources\ContactMethodResource\Pages;

use App\Filament\Resources\ContactMethodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactMethod extends EditRecord
{
    protected static string $resource = ContactMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
