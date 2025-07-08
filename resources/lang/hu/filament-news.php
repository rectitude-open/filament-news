<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Hírek',
            'group' => 'Tartalom',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Hírek',
            'group' => '',
        ],
        'field' => [
            'content' => 'Tartalom',
            'title' => 'Cím',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategóriák',
            'tags' => 'Címkék',
            'featured_image' => 'Kiemelt kép',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Összefoglaló',
            'weight' => 'Súly',
            'status' => 'Állapot',
            'created_at' => 'Létrehozva',
            'status_published' => 'Közzétéve',
            'status_draft' => 'Piszkozat',
        ],
        'info' => [
            'select_categories' => 'Kategóriák kiválasztása',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Hírkategóriák',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Címkék',
            'group' => '',
        ],
        'field' => [
            'name' => 'Név',
            'slug' => 'Slug',
            'weight' => 'Súly',
            'count' => 'Darab',
        ],
    ],
];
