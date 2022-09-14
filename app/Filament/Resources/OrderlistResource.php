<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderlistResource\Pages;
use App\Filament\Resources\OrderlistResource\RelationManagers;
use App\Models\Orderlist;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderlistResource extends Resource
{
    protected static ?string $model = Orderlist::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //

                Forms\Components\TextInput::make('serviceid')
                ->maxLength(255),
            Forms\Components\TextInput::make('service')
                ->maxLength(255),
            Forms\Components\TextInput::make('price')
                ->maxLength(255),
            Forms\Components\TextInput::make('quantity')
                ->maxLength(255),
            Forms\Components\TextInput::make('url')
                ->maxLength(255),
                Forms\Components\TextInput::make('status')
                ->maxLength(255),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
     
                Tables\Columns\TextColumn::make('serviceid')
                ->label('订单id'),
                Tables\Columns\TextColumn::make('created_at')
                ->label('创建日期'),
            Tables\Columns\TextColumn::make('service')
                ->label('服务名称'),
            Tables\Columns\TextColumn::make('price')
                ->label('费用'),
            Tables\Columns\TextColumn::make('quantity')
                ->label('数量'),
            Tables\Columns\TextColumn::make('url')
                ->label('关联链接'),

            Tables\Columns\TextColumn::make('status')
            ->label('订单状态'),
            Tables\Columns\TextColumn::make('user.name')
            ->label('用户')

            ])
            
            ->filters([
         
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
            'index' => Pages\ListOrderlists::route('/'),
            'create' => Pages\CreateOrderlist::route('/create'),
            'edit' => Pages\EditOrderlist::route('/{record}/edit'),
        ];
    }   
    
    public static function getGloballySearchableAttributes(): array
    {
        return ['serviceid'];
    }
}
