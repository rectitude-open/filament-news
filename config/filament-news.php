<?php

return [
    'navigation_sort' => 0,
    'navigation_icon' => 'heroicon-o-newspaper',
    'datetime_format' => 'Y-m-d H:i:s',
    'navigation_badge' => false,

    'news_model' => \RectitudeOpen\FilamentNews\Models\News::class,
    'news_category_model' => \RectitudeOpen\FilamentNews\Models\NewsCategory::class,
    'tag_model' => \RectitudeOpen\FilamentNews\Models\Tag::class,

    'news_category_page' => \RectitudeOpen\FilamentNews\Filament\Pages\NewsCategory::class,
    'news_filament_resource' => \RectitudeOpen\FilamentNews\Filament\Resources\NewsResource::class,
    'news_tag_filament_resource' => \RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource::class,

    'editor_component_class' => \Filament\Forms\Components\RichEditor::class,
];
