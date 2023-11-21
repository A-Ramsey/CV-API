<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillAwardResource\Pages;
use App\Filament\Resources\SkillAwardResource\RelationManagers;
use App\Models\SkillAward;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Enums\SkillAwardTypeEnum;

class SkillAwardResource extends Resource
{
    protected static ?string $model = SkillAward::class;

    protected static ?string $navigationLabel = 'Skills/Awards';

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Select::make('skillAwardType')
                    ->label('Skill or Award?')
                    ->native(config()->get('app.useNativeSelect', true))
                    ->options(SkillAwardTypeEnum::toSelectArray())
                    ->required(),
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
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('skillAwardType')
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
            'index' => Pages\ListSkillAwards::route('/'),
            'create' => Pages\CreateSkillAward::route('/create'),
            'edit' => Pages\EditSkillAward::route('/{record}/edit'),
        ];
    }
}
