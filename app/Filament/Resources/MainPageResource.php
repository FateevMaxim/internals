<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\MainPageResource\Pages;
use App\Filament\Resources\MainPageResource\RelationManagers;
use App\Models\MainPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MainPageResource extends Resource
{
    protected static ?string $model = MainPage::class;
    protected static ?string $navigationLabel = 'Главная страница';
    protected static ?string $modelLabel = 'Главная страница';
    protected static ?string $pluralModelLabel = 'Главная страница';
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?int $navigationSort = -2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tag')->label('Тег')->required(),
                Forms\Components\TextInput::make('title')->label('Название')->required(),
                \Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor::make('data')
                    ->columnSpan(2)
                    ->fileAttachmentsDirectory('main-page')
                    ->label('Данные')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Название'),
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
            'index' => Pages\ListMainPages::route('/'),
            'create' => Pages\CreateMainPage::route('/create'),
            'edit' => Pages\EditMainPage::route('/{record}/edit'),
        ];
    }
}
