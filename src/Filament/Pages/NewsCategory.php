<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Pages;

use Filament\Forms\Components\TextInput;
use RectitudeOpen\FilamentNews\Filament\Clusters\NewsCluster;
use RectitudeOpen\FilamentNews\Models\NewsCategory as TreePageModel;
use SolutionForest\FilamentTree\Pages\TreePage as BasePage;
use Illuminate\Contracts\Support\Htmlable;

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
        return config('filament-news.news_category.navigation_icon', 'heroicon-o-rectangle-stack');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-news::filament-news.news_category.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-news::filament-news.news_category.nav.group');
    }

    public function getModel(): string
    {
        return static::$model ?? config('filament-news.news_category.model', TreePageModel::class);
    }

    public function getTitle(): string | Htmlable
    {
        return __('filament-news::filament-news.news_category.resource.label');
    }

    protected function getActions(): array
    {
        return [
            $this->getCreateAction()
                ->modalHeading(fn (): string => __('filament-actions::create.single.modal.heading', ['label' => __('filament-news::filament-news.news_category.resource.label')]))
                ->label(__('filament-news::filament-news.news_category.resource.label'))
                ->icon('heroicon-o-plus'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label(__('filament-news::filament-news.news_category.field.title'))
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
