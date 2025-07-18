<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieTagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;
use RectitudeOpen\FilamentNews\Filament\Clusters\NewsCluster;
use RectitudeOpen\FilamentNews\Filament\Resources\NewsResource\Pages;
use RectitudeOpen\FilamentNews\Models\News;

class NewsResource extends Resource
{
    protected static ?string $cluster = NewsCluster::class;

    public static function getModel(): string
    {
        return static::$model ?? config('filament-news.news_model', News::class);
    }

    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-news.news.navigation_icon', 'heroicon-o-newspaper');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-news.news.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-news::filament-news.news.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-news::filament-news.news.nav.group');
    }

    public static function getNavigationBadge(): ?string
    {
        return config('filament-news.news.navigation_badge', false)
                ? (string) static::getModel()::count()
                : '';
    }

    public static function form(Form $form): Form
    {
        $editorClass = config('filament-news.editor_component_class', RichEditor::class);
        $editorComponent = $editorClass::make('content')
            ->label(__('filament-news::filament-news.news.field.content'))
            ->fileAttachmentsDisk('public')
            ->fileAttachmentsDirectory('uploads')
            ->fileAttachmentsVisibility('public')
            ->columnSpan('full');

        return $form
            ->schema([
                Grid::make(['sm' => 3])->schema([
                    Grid::make()->schema([
                        TextInput::make('title')
                            ->label(__('filament-news::filament-news.news.field.title'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        $editorComponent,
                        Section::make(__('filament-news::filament-news.news.field.seo'))
                            ->compact()
                            ->schema([
                                SEO::make(),
                            ])
                            ->collapsible(),
                    ])->columnSpan(['xl' => 2]),
                    Grid::make()->schema([
                        Section::make(__('filament-news::filament-news.news.field.taxonomy'))
                            ->compact()
                            ->schema([
                                SelectTree::make('categories')
                                    ->label(__('filament-news::filament-news.news.field.categories'))
                                    ->placeholder(__('filament-news::filament-news.news.info.select_categories'))
                                    ->parentNullValue(-1)
                                    ->relationship('categories', 'title', 'parent_id')
                                    ->searchable()
                                    ->defaultOpenLevel(3)
                                    ->columnSpanFull()
                                    ->required(),
                                SpatieTagsInput::make('tags')
                                    ->label(__('filament-news::filament-news.news.field.tags'))
                                    ->nullable(),
                            ]),
                        Section::make(__('filament-news::filament-news.news.field.featured_image'))
                            ->compact()
                            ->schema([
                                CuratorPicker::make('featured_image_id')
                                    ->relationship('featured_image', 'id')
                                    ->hiddenLabel()
                                    ->maxItems(1)
                                    ->directory('news')
                                    ->listDisplay(true),
                            ]),
                        Section::make(__('filament-news::filament-news.news.field.meta'))
                            ->compact()
                            ->schema([
                                TextInput::make('slug')
                                    ->label(__('filament-news::filament-news.news.field.slug'))
                                    ->maxLength(255)
                                    ->inlineLabel()
                                    ->columnSpanFull(),
                                TextInput::make('external_link')
                                    ->label(__('filament-news::filament-news.news.field.external_link'))
                                    ->url()
                                    ->maxLength(255)
                                    ->inlineLabel()
                                    ->columnSpanFull()
                                    ->dehydrateStateUsing(fn ($state) => $state ?? ''),
                                Textarea::make('summary')
                                    ->label(__('filament-news::filament-news.news.field.summary'))
                                    ->default('')
                                    ->maxLength(255)
                                    ->inlineLabel()
                                    ->columnSpanFull()
                                    ->dehydrateStateUsing(fn ($state) => $state ?? ''),
                                TextInput::make('weight')
                                    ->label(__('filament-news::filament-news.news.field.weight'))
                                    ->default(0)
                                    ->numeric()
                                    ->step(1)
                                    ->inlineLabel()
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                ToggleButtons::make('status')
                                    ->label(__('filament-news::filament-news.news.field.status'))
                                    ->options([
                                        1 => __('filament-news::filament-news.news.field.status_published'),
                                        0 => __('filament-news::filament-news.news.field.status_draft'),
                                    ])
                                    ->default(1)
                                    ->colors([
                                        1 => 'success',
                                        0 => 'warning',
                                    ])
                                    ->icons([
                                        1 => 'heroicon-o-check-circle',
                                        0 => 'heroicon-o-x-circle',
                                    ])
                                    ->inline()
                                    ->inlineLabel(),
                                DateTimePicker::make('created_at')
                                    ->label(__('filament-news::filament-news.news.field.created_at'))
                                    ->native(false)
                                    ->default(now())
                                    ->suffixIcon('heroicon-o-calendar')
                                    ->columnSpanFull()
                                    ->inlineLabel()
                                    ->format(config('filament-news.news.datetime_format', 'Y-m-d H:i:s'))
                                    ->displayFormat(config('filament-news.news.datetime_format', 'Y-m-d H:i:s')),
                            ])
                            ->collapsible(),
                    ])->columnSpan(['xl' => 1]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('filament-news::filament-news.news.field.title'))
                    ->searchable()
                    ->limit(50),
                CuratorColumn::make('featured_image')
                    ->label('')
                    ->size(30),
                IconColumn::make('external_link')
                    ->label('')
                    ->boolean()
                    ->icon(fn ($state) => $state ? 'heroicon-o-arrow-top-right-on-square' : null)
                    ->color(fn ($state) => $state ? 'primary' : null)
                    ->tooltip(fn ($record) => $record->external_link)
                    ->url(fn ($record) => $record->external_link, true)
                    ->openUrlInNewTab(),
                TextColumn::make('categories.title')
                    ->label(__('filament-news::filament-news.news.field.categories'))
                    ->searchable()
                    ->limit(50)
                    ->formatStateUsing(fn ($state) => implode('<br/>', explode(', ', $state)))
                    ->html(),
                SpatieTagsColumn::make('tags')
                    ->label(__('filament-news::filament-news.news.field.tags')),
                IconColumn::make('status')
                    ->label(__('filament-news::filament-news.news.field.status'))
                    ->icon(fn ($state): string => match ($state) {
                        1 => 'heroicon-o-check-circle',
                        0 => 'heroicon-o-x-circle',
                        default => 'heroicon-o-question-mark-circle',
                    })
                    ->color(fn ($state): string => match ($state) {
                        1 => 'success',
                        0 => 'danger',
                        default => 'warning',
                    }),
                TextColumn::make('created_at')
                    ->label(__('filament-news::filament-news.news.field.created_at'))
                    ->sortable(),
            ])->filters([
                Tables\Filters\TrashedFilter::make(),
                SelectFilter::make('status')
                    ->label(__('filament-news::filament-news.news.field.status'))
                    ->options([
                        1 => __('filament-news::filament-news.news.field.status_published'),
                        0 => __('filament-news::filament-news.news.field.status_draft'),
                    ]),
                SelectFilter::make('categories')
                    ->label(__('filament-news::filament-news.news.field.categories'))
                    ->relationship('categories', 'title')
                    ->searchable(),
            ])->headerActions([
                //
            ])->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
            'revisions' => Pages\NewsRevisions::route('/{record}/revisions'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
