<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Facade\FlareClient\Stacktrace\File;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;
use Filament\Tables\Columns\ImageColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('project_name')
                    ->label('Project Name')
                    ->placeholder('Project Name')
                    ->required()
                    ->autofocus(),
                Textarea::make('description')
                    ->label('Project Description')
                    ->placeholder('Project Description')
                    ->required(),
                TextInput::make('location')
                    ->label('Location')
                    ->placeholder('Location')
                    ->required(),
                DatePicker::make('year')
                    ->label('Year')
                    ->required(),
                Select::make('category')
                    ->label('Category')
                    ->placeholder('Category')
                    ->options([
                        'architecture' => 'Architecture',
                        'interior' => 'Interior',
                        'foundation projects' => 'Foundation Projects',
                        'building performance' => 'Building Performance',
                    ])
                    ->required(),
                TextInput::make('size')
                    ->label('Size')
                    ->placeholder('Size')
                    ->required(),
                Select::make('status')
                    ->label('Status')
                    ->placeholder('Status')
                    ->options([
                        'under construction' => 'Under Construction',
                        'concept' => 'Concept',
                        'done' => 'Done',
                    ])
                    ->required(),
                TextInput::make('client')
                    ->label('Client')
                    ->placeholder('Client')
                    ->required(),
                FileUpload::make('gambar')
                    ->label('Image')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('project_name')
                    ->label('Project Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('location')
                    ->label('Location')
                    ->searchable()
                    ->sortable(),
                BadgeColumn::make('category')
                    ->label('Category')
                    ->colors([
                        'primary' => 'architecture',
                        'secondary' => 'interior',
                        'success' => 'foundation projects',
                        'danger' => 'building performance',
                    ]),
                TextColumn::make('client')
                    ->label('Client')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('year')
                    ->label('Year')
                    ->sortable(),
                ImageColumn::make('gambar')
                    ->label('Image')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
