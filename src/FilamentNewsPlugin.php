<?php

namespace RectitudeOpen\FilamentNews;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RectitudeOpen\FilamentNews\Filament\Pages\NewsCategory;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsResource;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource;

class FilamentNewsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-news';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                config('filament-news.news.filament_resource', NewsResource::class),
                config('filament-news.tag.filament_resource', NewsTagResource::class),
            ])
            ->pages([
                config('filament-news.news_category.page', NewsCategory::class),
            ])
            ->discoverClusters(
                __DIR__ . '/Filament/Clusters',
                'RectitudeOpen\\FilamentNews\\Filament\\Clusters'
            );
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
