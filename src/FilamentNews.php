<?php

namespace RectitudeOpen\FilamentNews;

use Illuminate\Database\Eloquent\Model;
use RectitudeOpen\FilamentNews\Models\News;

class FilamentNews
{
    /**
     * @return class-string<Model>
     */
    public function getModel(): string
    {
        return config('filament-news.news.model', News::class);
    }
}
