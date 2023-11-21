<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CurriculumVitaeResource\Pages;
use App\Filament\Resources\CurriculumVitaeResource\RelationManagers;
use App\Models\CurriculumVitae;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CurriculumVitaeResource extends Resource
{
    protected static ?string $model = CurriculumVitae::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->minLength(4)
                    ->alphaDash()
                    ->unique()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\JobsRelationManager::class,
            RelationManagers\QualificationsRelationManager::class,
            RelationManagers\SectionsRelationManager::class,
            RelationManagers\ProjectsRelationManager::class,
            RelationManagers\SkillAwardsRelationManager::class,
            RelationManagers\ContactMethodsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCurriculumVitaes::route('/'),
            'create' => Pages\CreateCurriculumVitae::route('/create'),
            'edit' => Pages\EditCurriculumVitae::route('/{record}/edit'),
        ];
    }
}
