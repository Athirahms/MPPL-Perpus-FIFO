<?php

namespace App\Filament\Admin\Resources\PinjamResource\Pages;

use App\Filament\Admin\Resources\PinjamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPinjams extends ListRecords
{
    protected static string $resource = PinjamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
