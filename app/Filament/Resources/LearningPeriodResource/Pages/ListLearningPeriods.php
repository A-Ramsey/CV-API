<?php

namespace App\Filament\Resources\LearningPeriodResource\Pages;

use App\Filament\Resources\LearningPeriodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLearningPeriods extends ListRecords
{
    protected static string $resource = LearningPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
