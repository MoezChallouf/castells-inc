<?php

namespace App\Filament\Resources\ProjectImageResource\Pages;

use App\Filament\Resources\ProjectImageResource;
use App\Models\ProjectImage;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProjectImage extends CreateRecord
{
    protected static string $resource = ProjectImageResource::class;

     protected function handleRecordCreation(array $data): Model
    {
        foreach ($data['images'] as $imagePath) {
            ProjectImage::create([
                'project_id' => $data['project_id'],
                'image_path' => $imagePath,
            ]);
        }

        return new ProjectImage(); 
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index'); 
    }
}
