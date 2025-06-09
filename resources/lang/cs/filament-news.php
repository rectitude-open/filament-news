<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Zprávy',
            'group' => 'Obsah',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Zprávy',
            'group' => 'Obsah',
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
            'status_active' => 'Aktivní',
            'status_suspended' => 'Pozastaveno',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategorie',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategorie zpráv',
            'group' => 'Obsah',
        ],
        'field' => [
            'title' => 'Název',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Štítky',
            'group' => 'Obsah',
        ],
        'field' => [
            'name' => 'Název',
            'slug' => 'Slug',
            'weight' => 'Váha',
            'count' => 'Počet',
        ],
    ],
];
