<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LearningPeriodResource\Pages;
use App\Filament\Resources\LearningPeriodResource\RelationManagers;
use App\Models\LearningPeriod;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LearningPeriodResource extends Resource
{
    protected static ?string $model = LearningPeriod::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('startDate')
                    ->required(),
                Forms\Components\DatePicker::make('endDate'),
                Forms\Components\TextInput::make('placeOfStudy')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('notes')
                    ->maxLength(65535)
                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('startDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('endDate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('placeOfStudy')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLearningPeriods::route('/'),
            'create' => Pages\CreateLearningPeriod::route('/create'),
            'edit' => Pages\EditLearningPeriod::route('/{record}/edit'),
        ];
    }
}
