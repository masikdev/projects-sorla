<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gambar;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Faker\Provider\ar_EG\Text;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Facade\FlareClient\Stacktrace\File;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GambarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GambarResource\RelationManagers;

class GambarResource extends Resource
{
    protected static ?string $model = Gambar::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Select::make('id_project')
                        ->label('Project')
                        ->placeholder('Project')
                        ->relationship('projects', 'project_name')
                        ->required(),
                    TextInput::make('image_name')
                        ->label('Image Name')
                        ->placeholder('Image Name')
                        ->required(),
                    FileUpload::make('image_desc')
                        ->label('Image Description')
                        ->image()
                        ->multiple()
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('projects.project_name')
                    ->label('Project')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('image_name')
                    ->label('Image Name')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image_desc')
                    ->label('Image'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListGambars::route('/'),
            'create' => Pages\CreateGambar::route('/create'),
            'edit' => Pages\EditGambar::route('/{record}/edit'),
        ];
    }    
}
