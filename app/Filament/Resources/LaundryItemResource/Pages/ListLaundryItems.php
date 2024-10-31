<?php

namespace App\Filament\Resources\LaundryItemResource\Pages;

use App\Filament\Resources\LaundryItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaundryItems extends ListRecords
{
    protected static string $resource = LaundryItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
