<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactRequestResource\Pages;
use App\Filament\Resources\ContactRequestResource\RelationManagers;
use App\Models\ContactRequest;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactRequestResource extends Resource
{
    protected static ?string $model = ContactRequest::class;

     protected static ?string $navigationGroup = 'Gestion des Contacts';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),

            ]);
                }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('subject')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Received At'),



                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
              Action::make('viewImages')
                ->label('See images')
                ->icon('heroicon-o-photo')
                ->modalHeading('Images du projet')
                ->modalContent(function ($record) {
                    $attachments = json_decode($record->attachments, true) ?? [];

                    return view('filament.components.view-attachments', [
                        'images' => $attachments,
                    ]);
                })
                ->modalSubmitAction(false)
                ->modalCancelActionLabel('Fermer')
                ->visible(fn ($record) => $record->attachments)
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
            'index' => Pages\ListContactRequests::route('/'),
            // 'create' => Pages\CreateContactRequest::route('/create'),
            // 'edit' => Pages\EditContactRequest::route('/{record}/edit'),
        ];
    }
}
