<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Správy',
            'group' => 'Obsah',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Správy',
            'group' => '',
        ],
        'field' => [
            'content' => 'Obsah',
            'title' => 'Názov',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategórie',
            'tags' => 'Tagy',
            'featured_image' => 'Hlavný obrázok',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Zhrnutie',
            'weight' => 'Váha',
            'status' => 'Stav',
            'created_at' => 'Vytvorené',
            'status_active' => 'Aktívny',
            'status_suspended' => 'Pozastavený',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategórie',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategórie správ',
            'group' => '',
        ],
        'field' => [
            'title' => 'Názov',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tagy',
            'group' => '',
        ],
        'field' => [
            'name' => 'Názov',
            'slug' => 'Slug',
            'weight' => 'Váha',
            'count' => 'Počet',
        ],
    ],
];
