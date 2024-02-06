<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('Banner information')->schema([
                    FileUpload::make('image')
                        ->image()
                        ->imageEditor()
                        ->disk('media')
                        ->directory('banners')
                        ->required()
                        ->columnSpanFull(),
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),
                    Textarea::make('sub_title')
                        ->maxLength(255)
                        ->columnSpanFull(),
                ]),

                Forms\Components\Section::make('Banner Button')->schema([
                    TextInput::make('button_text')->default('Book Now')
                        ->maxLength(255),
                    TextInput::make('button_url')
                        ->maxLength(1000),
                ])->columnSpanFull(),

                Forms\Components\Toggle::make('status')
                    ->required()->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort')
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('media')
                    ->columnSpanFull(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean()->toggle(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->slideOver(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBanners::route('/'),
            // 'create' => Pages\CreateBanner::route('/create'),
            // 'view' => Pages\ViewBanner::route('/{record}'),
            // 'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }


}
