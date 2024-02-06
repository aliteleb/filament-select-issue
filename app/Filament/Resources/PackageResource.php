<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Helpers\SpatieMediaLibraryImageColumn;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('title')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required()
                    ->native(false)
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                    ]),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(1000)
                    ->columnSpanFull(),

                Forms\Components\Section::make('Images')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->disk('media')
                            ->directory('packages')
                            ->multiple()
                            ->imageEditor()
                            ->reorderable()
                            ->maxFiles(5)
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),

                Forms\Components\Group::make()->schema([
                    Forms\Components\TextInput::make('days_count')
                        ->required()
                        ->numeric()
                        ->default(1),

                    Forms\Components\TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->default(0.00)
                        ->prefix('$'),

                    Forms\Components\Toggle::make('status')
                        ->required()
                        ->default(true),
                ])->columnSpan(['lg' => 1]),

                Forms\Components\Group::make()->schema([
                    Forms\Components\MarkdownEditor::make('details')
                        ->required()
                        ->maxLength(255)
                        ->columnSpan('full'),
                ])->columnSpan(['lg' => 1]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort')
            ->columns([
                SpatieMediaLibraryImageColumn::make('Media')->conversion('thumb'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('days_count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean()
                    ->toggle(),
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            // 'view' => Pages\ViewPackage::route('/{record}'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
