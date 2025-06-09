<?php

return [
    'news' => [
        'nav' => [
            'label' => 'Hírek',
            'group' => 'Tartalom',
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
            'status_active' => 'Aktív',
            'status_suspended' => 'Felfüggesztve',
        ],
        'info' => [
            'select_categories' => 'Kategóriák kiválasztása',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Hírkategóriák',
            'group' => 'Tartalom',
        ],
        'field' => [
            'title' => 'Cím',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Címkék',
            'group' => 'Tartalom',
        ],
        'field' => [
            'name' => 'Név',
            'slug' => 'Slug',
            'weight' => 'Súly',
            'count' => 'Darab',
        ],
    ],
];
