<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources\NewsResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsResource;

class EditNews extends EditRecord
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
