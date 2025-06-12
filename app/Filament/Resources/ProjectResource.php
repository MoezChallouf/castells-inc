<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectImagesRelationManagerResource\RelationManagers\ProjectResourceRelationManager;
use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{

     public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationBadgeTooltip = 'Nombre de Projets';

    protected static ?string $navigationGroup = 'Gestion des Projects';
    
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

     public static function form(Form $form): Form
    {
        return $form
            ->schema([  
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
                
            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),
                
            Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpanFull(),
                
            Forms\Components\FileUpload::make('before_image')
                ->image()
                ->required()
                ->directory('projects/before'),
                
            Forms\Components\FileUpload::make('after_image')
                ->image()
                ->required()
                ->directory('projects/after'),

            Forms\Components\Select::make('tags')
                ->relationship('tags', 'name')
                ->multiple()
                ->preload()
                ->searchable()
                ->createOptionForm([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                ]),
                
            Forms\Components\Toggle::make('is_featured')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->alignCenter(),
                Tables\Columns\TextColumn::make('category.name')->alignCenter(),
                Tables\Columns\IconColumn::make('is_featured')->alignCenter()
                    ->boolean(),
                Tables\Columns\ImageColumn::make('before_image')->alignCenter(),
                Tables\Columns\ImageColumn::make('after_image')->alignCenter(),
                Tables\Columns\TextColumn::make('tags.name')->alignCenter(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label(''),
                Tables\Actions\EditAction::make()->label(''),
                Tables\Actions\DeleteAction::make()->label(''),
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
        //    ProjectResourceRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            // 'create' => Pages\CreateProject::route('/create'),
            // 'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
