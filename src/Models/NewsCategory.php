<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RectitudeOpen\FilamentNews\Database\Factories\NewsCategoryFactory;
use SolutionForest\FilamentTree\Concern\ModelTree;

class NewsCategory extends Model
{
    use HasFactory;
    use ModelTree;
    use SoftDeletes;

    protected $fillable = ['title', 'parent_id', 'weight'];

    public function news()
    {
        return $this->belongsToMany(News::class, 'pivot_news_categories', 'category_id', 'news_id');
    }

    protected static function booted()
    {
        static::forceDeleted(function ($newsCategory) {
            $newsCategory->news()->detach();
        });
    }

    protected static function newFactory()
    {
        return NewsCategoryFactory::new();
    }
}
