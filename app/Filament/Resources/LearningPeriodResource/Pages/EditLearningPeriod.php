<?php

namespace App\Filament\Resources\LearningPeriodResource\Pages;

use App\Filament\Resources\LearningPeriodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLearningPeriod extends EditRecord
{
    protected static string $resource = LearningPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
