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
            'label' => 'Zoznam noviniek',
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
            'status_draft' => 'Koncept',
            'external_link' => 'Externý odkaz',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategórie',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Kategórie noviniek',
        ],
        'nav' => [
            'label' => 'Kategórie noviniek',
            'group' => '',
        ],
        'field' => [
            'title' => 'Názov',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Tagy noviniek',
        ],
        'nav' => [
            'label' => 'Tagy noviniek',
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
