<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Aktualności',
            'group' => 'Treść',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Aktualności',
        ],
        'nav' => [
            'label' => 'Lista aktualności',
            'group' => '',
        ],
        'field' => [
            'content' => 'Treść',
            'title' => 'Tytuł',
            'taxonomy' => 'Taksonomia',
            'categories' => 'Kategorie',
            'tags' => 'Tagi',
            'featured_image' => 'Obraz wyróżniający',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Podsumowanie',
            'weight' => 'Waga',
            'status' => 'Status',
            'created_at' => 'Utworzono',
            'status_published' => 'Opublikowano',
            'status_draft' => 'Szkic',
            'external_link' => 'Link zewnętrzny',
        ],
        'info' => [
            'select_categories' => 'Wybierz kategorie',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Kategorie aktualności',
        ],
        'nav' => [
            'label' => 'Kategorie aktualności',
            'group' => '',
        ],
        'field' => [
            'title' => 'Tytuł',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Tagi aktualności',
        ],
        'nav' => [
            'label' => 'Tagi aktualności',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nazwa',
            'slug' => 'Slug',
            'weight' => 'Waga',
            'count' => 'Liczba',
        ],
    ],
];
