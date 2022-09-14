<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaywayResource\Pages;
use App\Filament\Resources\PaywayResource\RelationManagers;
use App\Models\Payway;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaywayResource extends Resource
{
    protected static ?string $model = Payway::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->maxLength(255),
                Forms\Components\TextInput::make('key')
                    ->maxLength(255),
                Forms\Components\TextInput::make('shopid')
                    ->maxLength(255),
                Forms\Components\TextInput::make('shanghukey')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\TextColumn::make('shopid'),
                Tables\Columns\TextColumn::make('shanghukey'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPayways::route('/'),
            'create' => Pages\CreatePayway::route('/create'),
            'edit' => Pages\EditPayway::route('/{record}/edit'),
        ];
    }    
}
