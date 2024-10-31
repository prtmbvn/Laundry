<?php

namespace App\Filament\Resources\LaundryItemResource\Pages;

use App\Filament\Resources\LaundryItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaundryItem extends EditRecord
{
    protected static string $resource = LaundryItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
