<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Models;

use Awcodes\Curator\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Overtrue\LaravelVersionable\Versionable;
use Overtrue\LaravelVersionable\VersionStrategy;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RectitudeOpen\FilamentNews\Database\Factories\NewsFactory;
use Spatie\Tags\HasTags;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $summary
 * @property string $content
 * @property int $weight
 * @property int $featured_image_id
 * @property int $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \RectitudeOpen\FilamentNews\Models\NewsCategory> $categories
 * @property-read int|null $categories_count
 */
class News extends Model
{
    use HasFactory;
    use HasSEO;
    use HasTags;
    use Sluggable;
    use SoftDeletes;
    use Versionable;

    protected $fillable = ['title', 'slug', 'summary', 'content', 'weight', 'featured_image_id', 'status', 'created_at'];

    protected $versionable = ['title', 'slug', 'summary', 'content', 'weight', 'featured_image_id', 'status', 'created_at'];

    protected $versionStrategy = VersionStrategy::SNAPSHOT;

    public function categories()
    {
        return $this->belongsToMany(NewsCategory::class, 'pivot_news_categories', 'news_id', 'category_id');
    }

    protected static function booted()
    {
        static::forceDeleted(function ($news) {
            $news->categories()->detach();
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function featured_image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id', 'id');
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function withSlug(Builder $query, string $slug): void
    {
        $query->where('slug', $slug);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    public function active(Builder $query): void
    {
        $query->where('status', 1);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    public function suspended(Builder $query): void
    {
        $query->where('status', 0);
    }

    protected static function newFactory()
    {
        return NewsFactory::new();
    }
}
