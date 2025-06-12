<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecruitmentResource\Pages;
use App\Filament\Resources\RecruitmentResource\RelationManagers;
use App\Models\Recruitment;
use App\Models\Recrutement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class RecruitmentResource extends Resource
{
    protected static ?string $model = Recrutement::class;

  public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationGroup = 'Gestion des Contacts';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $modelLabel = 'Candidature';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->sortable(),

                TextColumn::make('phone')
                    ->label('Téléphone')
                    ->sortable(),

                TextColumn::make('message')
                ->label('Message')
                ->wrap()
                ->sortable(false),

                TextColumn::make('created_at')
                    ->label('Soumis le')
                    ->dateTime('d M Y'),

                TextColumn::make('cv_path')
                    ->label('CV')
                    ->getStateUsing(fn ($record) => $record->cv_path ? basename($record->cv_path) : 'Aucun')
                    ->visible(fn ($record) => !empty($record->cv_path)),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),

                Action::make('voir_cv')
                    ->label('Voir le CV')
                    ->icon('heroicon-o-document-text')
                    ->url(fn ($record) => $record->cv_path ? Storage::url($record->cv_path) : '#')
                    ->openUrlInNewTab()
                    ->visible(fn ($record) => !empty($record->cv_path)),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRecruitments::route('/'),
            'create' => Pages\CreateRecruitment::route('/create'),
            'edit' => Pages\EditRecruitment::route('/{record}/edit'),
        ];
    }
}
