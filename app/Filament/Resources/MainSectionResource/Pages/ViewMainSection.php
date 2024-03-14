<?php

namespace App\Filament\Resources\MainSectionResource\Pages;

use App\Filament\Resources\MainSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMainSection extends ViewRecord
{
    protected static string $resource = MainSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
