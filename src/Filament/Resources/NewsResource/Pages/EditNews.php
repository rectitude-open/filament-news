<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources\NewsResource\Pages;

use Filament\Resources\Pages\EditRecord;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsResource;

class EditNews extends EditRecord
{
    protected static string $resource = NewsResource::class;
}
