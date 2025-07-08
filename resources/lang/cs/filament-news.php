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
            'title' => 'Název',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Kategorie',
            'tags' => 'Štítky',
            'featured_image' => 'Hlavní obrázek',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Souhrn',
            'weight' => 'Váha',
            'status' => 'Stav',
            'created_at' => 'Vytvořeno',
            'status_published' => 'Publikováno',
            'status_draft' => 'Návrh',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategorie',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategorie novinek',
            'group' => '',
        ],
        'field' => [
            'title' => 'Název',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Štítky',
            'group' => '',
        ],
        'field' => [
            'name' => 'Název',
            'slug' => 'Slug',
            'weight' => 'Váha',
            'count' => 'Počet',
        ],
    ],
];
