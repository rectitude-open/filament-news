<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Aktualności',
            'group' => 'Treść',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Aktualności',
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
        ],
        'info' => [
            'select_categories' => 'Wybierz kategorie',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategorie aktualności',
            'group' => '',
        ],
        'field' => [
            'title' => 'Tytuł',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tagi',
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
