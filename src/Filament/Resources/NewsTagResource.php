<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use RectitudeOpen\FilamentNews\Filament\Clusters\NewsCluster;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource\Pages;
use RectitudeOpen\FilamentNews\Models\Tag;

class NewsTagResource extends Resource
{
    protected static ?string $cluster = NewsCluster::class;

    public static function getNavigationIcon(): ?string
    {
        return config('filament-news.tag.navigation_icon', 'heroicon-o-rectangle-stack');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-news.tag.navigation_sort', 3);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-news::filament-news.tag.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-news::filament-news.tag.nav.group');
    }

    public static function getModel(): string
    {
        return static::$model ?? config('filament-news.tag.model', Tag::class);
    }

    public static function getEloquentQuery(): Builder
    {
        /** @phpstan-ignore-next-line */
        return parent::getEloquentQuery()->queryWith('news')->withCount('news');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                KeyValue::make('name')
                    ->label(__('filament-news::filament-news.tag.field.name'))
                    ->required(),
                KeyValue::make('slug')
                    ->label(__('filament-news::filament-news.tag.field.slug'))
                    ->required(),
                TextInput::make('order_column')
                    ->label(__('filament-news::filament-news.tag.field.weight'))
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament-news::filament-news.tag.field.name'))
                    ->searchable(),
                TextColumn::make('slug')
                    ->label(__('filament-news::filament-news.tag.field.slug'))
                    ->searchable(),
                TextColumn::make('order_column')
                    ->label(__('filament-news::filament-news.tag.field.weight'))
                    ->searchable(),
                TextColumn::make('news_count')
                    ->label(__('filament-news::filament-news.tag.field.count'))
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsTags::route('/'),
            'edit' => Pages\EditNewsTag::route('/{record}/edit'),
        ];
    }
}
