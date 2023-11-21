<?php

namespace App\Filament\Resources\SkillAwardResource\Pages;

use App\Filament\Resources\SkillAwardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkillAwards extends ListRecords
{
    protected static string $resource = SkillAwardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
