<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources\NewsResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsResource;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
}
