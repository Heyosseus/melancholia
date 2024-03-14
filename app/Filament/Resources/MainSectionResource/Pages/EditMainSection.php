<?php

namespace App\Filament\Resources\MainSectionResource\Pages;

use App\Filament\Resources\MainSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainSection extends EditRecord
{
    protected static string $resource = MainSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
