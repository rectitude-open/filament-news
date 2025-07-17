<?php

namespace RectitudeOpen\FilamentNews;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
    public function listNewsPaginated(int $perPage = 10): LengthAwarePaginator
    {
        // @phpstan-ignore-next-line
        return $this->getModel()::with(['categories'])->ordered()->published()->paginate($perPage);
    }

    /**
     * @return LengthAwarePaginator<News>
     */
    public function listNewsPaginatedByCategory(int $categoryId, int $perPage = 10): LengthAwarePaginator
    {
        // @phpstan-ignore-next-line
        return $this->getModel()::with(['categories'])
            ->published()
            ->whereHas('categories', function ($query) use ($categoryId) {
                $query->where('news_categories.id', $categoryId);
            })
            ->ordered()
            ->paginate($perPage);
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getNewsOrFail(int | string $identifier): News
    {
        // @phpstan-ignore-next-line
        $query = $this->getModel()::with(['categories'])->published();

        if (is_numeric($identifier)) {
            $query->where('id', $identifier);
        } else {
            $query->withSlug($identifier);
        }

        $news = $query->firstOrFail();

        assert($news instanceof News);

        return $news;
    }
}
