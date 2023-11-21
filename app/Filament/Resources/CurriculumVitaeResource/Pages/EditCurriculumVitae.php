<?php

namespace App\Filament\Resources\CurriculumVitaeResource\Pages;

use App\Filament\Resources\CurriculumVitaeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCurriculumVitae extends EditRecord
{
    protected static string $resource = CurriculumVitaeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
