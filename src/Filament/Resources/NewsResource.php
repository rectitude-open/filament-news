<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Filament\Resources;

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
use TomatoPHP\FilamentMediaManager\Form\MediaManagerInput;

class NewsResource extends Resource
{
    protected static ?string $cluster = NewsCluster::class;

    public static function getModel(): string
    {
        return static::$model ?? config('filament-news.news_model', News::class);
    }

    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-news.navigation_icon', 'heroicon-o-newspaper');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-news.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-news::filament-news.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-news::filament-news.nav.group');
    }

    public static function getNavigationBadge(): ?string
    {
        return config('filament-contact-logs.navigation_badge', false)
                ? (string) static::getModel()::count()
                : '';
    }

    public static function form(Form $form): Form
    {
        $editorClass = config('filament-news.editor_component_class', RichEditor::class);
        $editorComponent = $editorClass::make('content')
            ->fileAttachmentsDisk('public')
            ->fileAttachmentsDirectory('uploads')
            ->fileAttachmentsVisibility('public')
            ->columnSpan('full');

        return $form
            ->schema([
                Grid::make(['sm' => 3])->schema([
                    Grid::make()->schema([
                        TextInput::make('title')
                            ->label(__('News Title'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        $editorComponent,
                    ])->columnSpan(['xl' => 2]),
                    Grid::make()->schema([
                        Section::make(__('Taxonomy'))
                            ->compact()
                            ->schema([
                                SelectTree::make('categories')
                                    ->label(__('Categories'))
                                    ->relationship('categories', 'title', 'parent_id')
                                    ->placeholder(__('Select Categories'))
                                    ->parentNullValue(-1)
                                    ->searchable()
                                    ->defaultOpenLevel(3)
                                    ->columnSpanFull()
                                    ->required(),
                                SpatieTagsInput::make('tags')
                                    ->label(__('Tags')),
                            ]),
                        Section::make(__('Featured Image'))
                            ->compact()
                            ->schema([
                                MediaManagerInput::make('featured_image')
                                    ->defaultItems(0)
                                    ->hiddenLabel()
                                    ->maxItems(1)
                                    ->disk('public')
                                    ->reorderable(false)
                                    ->schema([])
                                    ->nullable(),
                            ]),
                        Section::make(__('SEO'))
                            ->compact()
                            ->schema([
                                SEO::make(),
                            ])
                            ->collapsible(),
                        Section::make(__('Meta'))
                            ->compact()
                            ->schema([
                                TextInput::make('slug')
                                    ->label(__('Slug'))
                                    ->maxLength(255)
                                    ->inlineLabel()
                                    ->columnSpanFull(),
                                Textarea::make('summary')
                                    ->label(__('Summary'))
                                    ->default('')
                                    ->maxLength(255)
                                    ->inlineLabel()
                                    ->columnSpanFull()
                                    ->dehydrateStateUsing(fn ($state) => $state ?? ''),
                                TextInput::make('weight')
                                    ->label(__('Weight'))
                                    ->default(0)
                                    ->numeric()
                                    ->step(1)
                                    ->inlineLabel()
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                ToggleButtons::make('status')
                                    ->options([
                                        1 => 'Active',
                                        2 => 'Suspended',
                                    ])
                                    ->default(1)
                                    ->colors([
                                        1 => 'success',
                                        2 => 'warning',
                                    ])
                                    ->icons([
                                        1 => 'heroicon-o-check-circle',
                                        2 => 'heroicon-o-x-circle',
                                    ])
                                    ->inline()
                                    ->inlineLabel(),
                                DateTimePicker::make('created_at')
                                    ->label(__('Created At'))
                                    ->native(false)
                                    ->default(now())
                                    ->suffixIcon('heroicon-o-calendar')
                                    ->columnSpanFull()
                                    ->inlineLabel()
                                    ->format(config('filament-news.datetime_format', 'Y-m-d H:i:s'))
                                    ->displayFormat(config('filament-news.datetime_format', 'Y-m-d H:i:s')),
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
                    ->label(__('Title'))
                    ->searchable()
                    ->limit(50),
                TextColumn::make('categories.title')
                    ->label(__('Categories'))
                    ->searchable()
                    ->limit(50)
                    ->formatStateUsing(fn ($state) => implode('<br/>', explode(', ', $state)))
                    ->html(),
                SpatieTagsColumn::make('tags'),
                IconColumn::make('status')
                    ->icon(fn ($state): string => match ($state) {
                        1 => 'heroicon-o-check-circle',
                        2 => 'heroicon-o-x-circle',
                        default => 'heroicon-o-question-mark-circle',
                    })
                    ->color(fn ($state): string => match ($state) {
                        1 => 'success',
                        2 => 'danger',
                        default => 'warning',
                    }),
                TextColumn::make('created_at')
                    ->label(__('Created At'))
                    ->sortable(),
            ])->filters([
                Tables\Filters\TrashedFilter::make(),
                SelectFilter::make('status')
                    ->label(__('Status'))
                    ->options([
                        1 => 'Active',
                        2 => 'Suspended',
                    ]),
                SelectFilter::make('categories')
                    ->label(__('Categories'))
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
