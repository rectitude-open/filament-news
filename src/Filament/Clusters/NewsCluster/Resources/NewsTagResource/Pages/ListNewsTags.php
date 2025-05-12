<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Clusters\NewsCluster\Resources\NewsTagResource\Pages;

use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentNews\Filament\Clusters\NewsCluster\Resources\NewsTagResource;

class ListNewsTags extends ListRecords
{
    protected static string $resource = NewsTagResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
