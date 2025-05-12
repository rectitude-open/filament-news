<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Pages;

use Filament\Forms\Components\TextInput;
use RectitudeOpen\FilamentNews\Filament\Clusters\NewsCluster;
use RectitudeOpen\FilamentNews\Models\NewsCategory as TreePageModel;
use SolutionForest\FilamentTree\Pages\TreePage as BasePage;

class NewsCategory extends BasePage
{
    protected static string $model = TreePageModel::class;

    protected static ?string $cluster = NewsCluster::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static int $maxDepth = 3;

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
