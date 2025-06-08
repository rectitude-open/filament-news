<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Pages;

use Filament\Forms\Components\TextInput;
use RectitudeOpen\FilamentNews\Filament\Clusters\NewsCluster;
use RectitudeOpen\FilamentNews\Models\NewsCategory as TreePageModel;
use SolutionForest\FilamentTree\Pages\TreePage as BasePage;

class NewsCategory extends BasePage
{
    protected static ?string $cluster = NewsCluster::class;

    protected static int $maxDepth = 3;

    public static function getNavigationSort(): ?int
    {
        return config('filament-news.news_category.navigation_sort', 2);
    }

    public static function getNavigationIcon(): ?string
    {
        return config('filament-news.news_category.navigation_icon', 'heroicon-o-tag');
    }

    public function getModel(): string
    {
        return static::$model ?? config('filament-news.news_category.model', TreePageModel::class);
    }

    protected function getActions(): array
    {
        return [
            $this->getCreateAction()->icon('heroicon-o-plus'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label(__('Title'))
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),
        ];
    }

    protected function hasDeleteAction(): bool
    {
        return true;
    }

    protected function hasEditAction(): bool
    {
        return true;
    }

    protected function hasViewAction(): bool
    {
        return false;
    }

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }
}
