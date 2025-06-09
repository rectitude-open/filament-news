<?php

return [
    'news' => [
        'nav' => [
            'label' => 'Wiadomości',
            'group' => 'Treść',
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
            'status_active' => 'Aktywny',
            'status_suspended' => 'Zawieszony',
        ],
        'info' => [
            'select_categories' => 'Wybierz kategorie',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategorie wiadomości',
            'group' => 'Treść',
        ],
        'field' => [
            'title' => 'Tytuł',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tagi',
            'group' => 'Treść',
        ],
        'field' => [
            'name' => 'Nazwa',
            'slug' => 'Slug',
            'weight' => 'Waga',
            'count' => 'Liczba',
        ],
    ],
    'cluster' => [
        'nav' => [
            'label' => 'Wiadomości',
            'group' => 'Treść',
        ],
    ],
];
