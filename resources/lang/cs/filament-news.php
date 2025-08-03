<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Novinky',
            'group' => 'Obsah',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Novinky',
        ],
        'nav' => [
            'label' => 'Seznam novinek',
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
            'status_draft' => 'Koncept',
            'external_link' => 'Externí odkaz',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategorie',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Kategorie novinek',
        ],
        'nav' => [
            'label' => 'Kategorie novinek',
            'group' => '',
        ],
        'field' => [
            'title' => 'Název',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Štítky novinek',
        ],
        'nav' => [
            'label' => 'Štítky novinek',
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
