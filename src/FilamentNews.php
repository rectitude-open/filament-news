<?php

namespace RectitudeOpen\FilamentNews;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use RectitudeOpen\FilamentNews\Models\News;

class FilamentNews
{
    /**
     * @return class-string<News>
     */
    public function getModel(): string
    {
        return config('filament-news.news.model', News::class);
    }

    /**
     * @return LengthAwarePaginator<News>
     */
    public function getLatestActiveNewsPaginated(int $perPage = 10): LengthAwarePaginator
    {
        return $this->getModel()::ordered()->published()->paginate($perPage);
    }
}
