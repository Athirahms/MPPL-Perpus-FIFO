<?php

namespace App\Filament\Admin\Resources\PinjamResource\Pages;

use App\Filament\Admin\Resources\PinjamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPinjam extends EditRecord
{
    protected static string $resource = PinjamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
