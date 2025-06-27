# Changelog

## [1.14.1](https://github.com/rectitude-open/filament-news/compare/v1.14.0...v1.14.1) (2025-06-27)


### Bug Fixes

* update status values to use 0 for suspended and adjust related icons and colors ([6a710e2](https://github.com/rectitude-open/filament-news/commit/6a710e29410701cd5a7d532baa32beeea542040f))

## [1.14.0](https://github.com/rectitude-open/filament-news/compare/v1.13.1...v1.14.0) (2025-06-27)


### Features

* implement getModel method to return configured news model class ([28a49fc](https://github.com/rectitude-open/filament-news/commit/28a49fc8aad964899d2947199f3fb3547b718274))


### Bug Fixes

* add created_at to versionable fields and implement query scopes for slug, active, and suspended statuses ([91e6841](https://github.com/rectitude-open/filament-news/commit/91e6841e4c7a9b96c51efbc1b99a5b8cae719fd4))
* update created_at field to use faker's dateTimeThisYear for consistency ([1d8dc78](https://github.com/rectitude-open/filament-news/commit/1d8dc78400d8b4ee3c33881d6bec76d55c478eca))


### Miscellaneous Chores

* style fix ([d3d296e](https://github.com/rectitude-open/filament-news/commit/d3d296e5f477c6f99447f67b38037e2d4ca0a072))

## [1.13.1](https://github.com/rectitude-open/filament-news/compare/v1.13.0...v1.13.1) (2025-06-19)


### Bug Fixes

* update summary and content fields to use realText for better realism ([7146e5a](https://github.com/rectitude-open/filament-news/commit/7146e5a09fc94e7e28e80e947414b1e0c1be4946))
* update translation tag in README for clarity ([b793d11](https://github.com/rectitude-open/filament-news/commit/b793d110697f2f60c6e357766b5536a22d39ab63))

## [1.13.0](https://github.com/rectitude-open/filament-news/compare/v1.12.3...v1.13.0) (2025-06-15)


### Features

* add CuratorColumn for featured image and enable list display ([37f125c](https://github.com/rectitude-open/filament-news/commit/37f125c172c95954695cba0c35e06d3b5eefadbe))

## [1.12.3](https://github.com/rectitude-open/filament-news/compare/v1.12.2...v1.12.3) (2025-06-14)


### Bug Fixes

* rename featuredImage method to featured_image for consistency ([cd42119](https://github.com/rectitude-open/filament-news/commit/cd4211986caffc6d3606fb4bf83beb82f22f9bf2))

## [1.12.2](https://github.com/rectitude-open/filament-news/compare/v1.12.1...v1.12.2) (2025-06-14)


### Bug Fixes

* update featured_image_id field in NewsResource to allow single item selection and specify directory ([bd73073](https://github.com/rectitude-open/filament-news/commit/bd73073e22e94dc5348cc24c9ab712279eed6155))

## [1.12.1](https://github.com/rectitude-open/filament-news/compare/v1.12.0...v1.12.1) (2025-06-14)


### Bug Fixes

* include featured_image_id in fillable and versionable attributes of News model ([55abd2e](https://github.com/rectitude-open/filament-news/commit/55abd2e041af688296746c79885fa18ff5c67a52))

## [1.12.0](https://github.com/rectitude-open/filament-news/compare/v1.11.2...v1.12.0) (2025-06-14)


### Features

* use Filament Curator instead of media manager ([953c4fe](https://github.com/rectitude-open/filament-news/commit/953c4fe426a06bd261dead6ccdcb84114f0dc6c4))

## [1.11.2](https://github.com/rectitude-open/filament-news/compare/v1.11.1...v1.11.2) (2025-06-13)


### Bug Fixes

* remove featured_image from NewsFactory definition ([6ef536a](https://github.com/rectitude-open/filament-news/commit/6ef536aa03d08a0bf8a052edfd51ecb2f65451a5))

## [1.11.1](https://github.com/rectitude-open/filament-news/compare/v1.11.0...v1.11.1) (2025-06-13)


### Bug Fixes

* define model property in News and NewsCategory factories ([66b751a](https://github.com/rectitude-open/filament-news/commit/66b751ad33eeaedfec0a5e024430619f301e2ff0))

## [1.11.0](https://github.com/rectitude-open/filament-news/compare/v1.10.0...v1.11.0) (2025-06-10)


### Features

* implement factory methods for News and NewsCategory models ([5658e7e](https://github.com/rectitude-open/filament-news/commit/5658e7e0772748183f2bc4daffc563ff3691482c))

## [1.10.0](https://github.com/rectitude-open/filament-news/compare/v1.9.0...v1.10.0) (2025-06-10)


### Features

* add revisions action to EditNews page ([03d2ffb](https://github.com/rectitude-open/filament-news/commit/03d2ffb779840106bce7e80d6dad66c02eb644b4))


### Bug Fixes

* update navigation icons for news category and tag resources ([062c039](https://github.com/rectitude-open/filament-news/commit/062c039fb0be8c0d19b4ab13df8bf84106a31db1))

## [1.9.0](https://github.com/rectitude-open/filament-news/compare/v1.8.1...v1.9.0) (2025-06-10)


### Features

* add migration for news categories table ([89d35e1](https://github.com/rectitude-open/filament-news/commit/89d35e145a0f7c1790fee8ea58a2e89ef2945e23))

## [1.8.1](https://github.com/rectitude-open/filament-news/compare/v1.8.0...v1.8.1) (2025-06-10)


### Bug Fixes

* remove group labels from navigation in language files ([babf86f](https://github.com/rectitude-open/filament-news/commit/babf86fc02763cbf82793f9a46f9b55935fccae2))

## [1.8.0](https://github.com/rectitude-open/filament-news/compare/v1.7.2...v1.8.0) (2025-06-09)


### Features

* add cluster configuration for navigation label in multiple languages ([2036fab](https://github.com/rectitude-open/filament-news/commit/2036fab30a94eb257a91c98a0d2593819a98e96c))


### Bug Fixes

* update status field labels in NewsResource to use correct keys ([361ae05](https://github.com/rectitude-open/filament-news/commit/361ae0581866e1187922639c8333565c9dd916f5))

## [1.7.2](https://github.com/rectitude-open/filament-news/compare/v1.7.1...v1.7.2) (2025-06-09)


### Bug Fixes

* add relationship for categories in NewsResource form ([44da7b6](https://github.com/rectitude-open/filament-news/commit/44da7b6324db120991527a6e42a96de8b842360f))
* correct link for Filament Select Tree in README ([5d1272f](https://github.com/rectitude-open/filament-news/commit/5d1272f5f0b1d0aea0e954eaf7e1c3c6826cc7de))

## [1.7.1](https://github.com/rectitude-open/filament-news/compare/v1.7.0...v1.7.1) (2025-06-09)


### Bug Fixes

* language files to use nested array structure ([20d77dc](https://github.com/rectitude-open/filament-news/commit/20d77dce4fed6c31cf2d6dd1588a95c21b1f9347))
* rename migration file for clarity from 'create_filament-news_table' to 'create_news_table' ([841f103](https://github.com/rectitude-open/filament-news/commit/841f103d010e442a24c78d6bb2644117959b15f2))

## [1.7.0](https://github.com/rectitude-open/filament-news/compare/v1.6.0...v1.7.0) (2025-06-08)


### Features

* add configurable navigation settings for NewsCategory and NewsTagResource ([2d89423](https://github.com/rectitude-open/filament-news/commit/2d894232e918fcecfa4ab3b1fe7a64d358468063))
* add configurable navigation settings to NewsResource ([aad6074](https://github.com/rectitude-open/filament-news/commit/aad6074f583305863445c1d19b9d675e39e3116e))
* add export-ignore for /dev and /filament-news-docker in .gitattributes ([21d6dce](https://github.com/rectitude-open/filament-news/commit/21d6dce0920e4d4ed080157dc5dfc89babb3b088))
* add more translations ([9467422](https://github.com/rectitude-open/filament-news/commit/94674223478845a4249048d7480edde536180371))
* add navigation settings for NewsCategory and NewsTagResource ([5313ea4](https://github.com/rectitude-open/filament-news/commit/5313ea422042b30e82d9eb1844950ada6b4437ab))
* update esbuild dependency to version 0.25.0 ([1b5503a](https://github.com/rectitude-open/filament-news/commit/1b5503a94168dc542735c4fbdcdb31015b5a179b))


### Bug Fixes

* add missing Filament Select Tree dependency in README ([36ca52a](https://github.com/rectitude-open/filament-news/commit/36ca52ad05f5f9f88ee471c9971b5a5ae716ff40))
* correct navigation badge configuration reference in NewsResource ([a9b1213](https://github.com/rectitude-open/filament-news/commit/a9b12137cc62a5d4a07eaff614a421ada387abb1))

## [1.6.0](https://github.com/rectitude-open/filament-news/compare/v1.5.0...v1.6.0) (2025-06-08)


### Features

* enhance NewsResource with soft delete functionality and actions ([005c3bc](https://github.com/rectitude-open/filament-news/commit/005c3bc5efaf919d8fe7b1c47aa35b14b7b56787))
* replace TinyEditor with RichEditor in NewsResource for enhanced content editing ([42ad4ba](https://github.com/rectitude-open/filament-news/commit/42ad4baf6cf1deb17bbf1842aceecef2259abe58))
* update NewsResource to use configurable editor component and adjust class references ([a2f9a87](https://github.com/rectitude-open/filament-news/commit/a2f9a87c4cb718087d68906bf7a3580a30c676ee))
* update README with installation notes and dependency requirements ([408d829](https://github.com/rectitude-open/filament-news/commit/408d829631c2443a054ec51d3aca531e23c36cd6))

## [1.5.0](https://github.com/rectitude-open/filament-news/compare/v1.4.0...v1.5.0) (2025-06-05)


### Features

* add SEO support to NewsResource and News model ([73dc595](https://github.com/rectitude-open/filament-news/commit/73dc595bd01894b54db434f75b0e7f3fe8c806cd))
* update README to include SEO optimization and version tracking in features list ([f04b697](https://github.com/rectitude-open/filament-news/commit/f04b6974a4220ee69e9c976f66895a12d44088e5))

## [1.4.0](https://github.com/rectitude-open/filament-news/compare/v1.3.0...v1.4.0) (2025-05-29)


### Features

* add create action to ListNews header ([4823ad7](https://github.com/rectitude-open/filament-news/commit/4823ad729fde55c17470e1357d54d6116abf3e84))
* update news table schema ([2a3b7fb](https://github.com/rectitude-open/filament-news/commit/2a3b7fb1f32c572a8c1c91f450e284f5e6f8f4ad))
* update README with detailed package description and add new banner image ([fb45a0f](https://github.com/rectitude-open/filament-news/commit/fb45a0f61e335d24d1fa216124115756f19097e3))

## [1.3.0](https://github.com/rectitude-open/filament-news/compare/v1.2.0...v1.3.0) (2025-05-14)


### Features

* move NewsTagResource and add config ([241adfd](https://github.com/rectitude-open/filament-news/commit/241adfd0698a5c8985d6dd93b4dc1f7bf0fa2f7c))

## [1.2.0](https://github.com/rectitude-open/filament-news/compare/v1.1.0...v1.2.0) (2025-05-13)


### Features

* add config to support dynamic model ([ecc58b0](https://github.com/rectitude-open/filament-news/commit/ecc58b09990c4eabec3c62a64dc16cb541546ee8))

## [1.1.0](https://github.com/rectitude-open/filament-news/compare/v1.0.1...v1.1.0) (2025-05-13)


### Features

* add news resource and dependencies ([d1a8d46](https://github.com/rectitude-open/filament-news/commit/d1a8d46774f8467037fcb1525a3fe00871855b93))

## [1.0.1](https://github.com/rectitude-open/filament-news/compare/v1.0.0...v1.0.1) (2025-05-12)


### Bug Fixes

* update cviebrock/eloquent-sluggable version constraint to support multiple versions ([0d6bf4a](https://github.com/rectitude-open/filament-news/commit/0d6bf4a17faa573c450df89a5e639a8624efcfe7))

## 1.0.0 (2025-05-12)


### Features

* add dependencies and core features ([6b1066f](https://github.com/rectitude-open/filament-news/commit/6b1066f15e65b50a2f68c0af75d104e826394e83))
* init package name and namespace ([38e6669](https://github.com/rectitude-open/filament-news/commit/38e6669c4af5f488833c520f3fb4cbffd71c422a))
* register news category page in FilamentNewsPlugin ([f037c81](https://github.com/rectitude-open/filament-news/commit/f037c812d3c0f2d7df11bef524ce0831bbcf7b83))
