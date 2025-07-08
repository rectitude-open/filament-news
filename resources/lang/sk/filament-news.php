<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Novinky',
            'group' => 'Obsah',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Novinky',
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
            'status_published' => 'Publikované',
            'status_draft' => 'Návrh',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategórie',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategórie noviniek',
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
