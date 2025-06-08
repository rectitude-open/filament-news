<?php

return [
    'news' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-newspaper',
        'datetime_format' => 'Y-m-d H:i:s',
        'navigation_badge' => false,
        'model' => \RectitudeOpen\FilamentNews\Models\News::class,
        'filament_resource' => \RectitudeOpen\FilamentNews\Filament\Resources\NewsResource::class,
    ],
    'news_category' => [
        'model' => \RectitudeOpen\FilamentNews\Models\NewsCategory::class,
        'page' => \RectitudeOpen\FilamentNews\Filament\Pages\NewsCategory::class,
    ],
    'tag' => [
        'model' => \RectitudeOpen\FilamentNews\Models\Tag::class,
        'filament_resource' => \RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource::class,
    ],

    'editor_component_class' => \Filament\Forms\Components\RichEditor::class,
];
