<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Clusters;

use Filament\Clusters\Cluster;
use Illuminate\Contracts\Support\Htmlable;

class NewsCluster extends Cluster
{
    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-news.cluster.navigation_icon', 'heroicon-o-newspaper');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-news.cluster.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-news::filament-news.cluster.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-news::filament-news.cluster.nav.group');
    }
}
