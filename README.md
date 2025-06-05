![Filament News Banner](./art/Filament%20News.png)
# Filament News

![Do not use](https://img.shields.io/badge/Under%20development-Don't%20use-red)
[![Tests](https://github.com/rectitude-open/filament-news/actions/workflows/run-tests.yml/badge.svg)](https://github.com/rectitude-open/filament-news/actions/workflows/run-tests.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%205-brightgreen)](https://phpstan.org/)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rectitude-open/filament-news.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-news)
[![Total Downloads](https://img.shields.io/packagist/dt/rectitude-open/filament-news.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-news)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](https://github.com/rectitude-open/filament-news/pulls)


Filament News is a Filament plugin that provides a comprehensive news management interface for your application. It's designed to help you quickly set up a backend for managing news articles, complete with common features such as **categories, tags, featured images, summaries, weight, SEO optimization, and version tracking**. This package streamlines the process of integrating a robust news system into your Filament admin panel.

This package is also a standalone part of a CMS project: [FilaPress](https://github.com/rectitude-open/filapress).

Resource | Page | Cluster | Migration | Model | Config | View | Localization
--- | --- | --- | --- | --- | --- | --- | ---
✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ❌ | ✅  

## Installation

You can install the package via composer:

```bash
composer require rectitude-open/filament-news
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-news-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-news-config"
```

Optionally, you can publish the translations using

```bash
php artisan vendor:publish --tag="filament-news-config-translations"
```

This is the contents of the published config file:

```php
return [
    'news_model' => RectitudeOpen\FilamentNews\Models\News::class,
    'news_category_model' => RectitudeOpen\FilamentNews\Models\NewsCategory::class,
    'tag_model' => RectitudeOpen\FilamentNews\Models\Tag::class,

    'news_category_page' => RectitudeOpen\FilamentNews\Filament\Pages\NewsCategory::class,
    'news_filament_resource' => RectitudeOpen\FilamentNews\Filament\Resources\NewsResource::class,
    'news_tag_filament_resource' => RectitudeOpen\FilamentNews\Filament\Resources\NewsTagResource::class,
];
```

## Usage

The package provides a cluster page that allows you to view News in your Filament admin panel. 

To use the cluster page provided by this package, you need to register it in your Panel Provider first.

```php
namespace App\Providers\Filament;

use RectitudeOpen\FilamentNews\FilamentNewsPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->plugins([
                FilamentNewsPlugin::make()
            ]);
    }
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Aspirant Zhang](https://github.com/aspirantzhang)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
