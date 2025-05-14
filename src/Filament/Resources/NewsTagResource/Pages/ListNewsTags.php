<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource\Pages;

use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource;

class ListNewsTags extends ListRecords
{
    protected static string $resource = NewsTagResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
