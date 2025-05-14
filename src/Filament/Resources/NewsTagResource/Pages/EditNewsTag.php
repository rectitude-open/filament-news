<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource;

class EditNewsTag extends EditRecord
{
    protected static string $resource = NewsTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
