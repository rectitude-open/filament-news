<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources\NewsResource\Pages;

use Mansoor\FilamentVersionable\RevisionsPage;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsResource;

class NewsRevisions extends RevisionsPage
{
    protected static string $resource = NewsResource::class;
}
