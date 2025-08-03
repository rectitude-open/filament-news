<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Hírek',
            'group' => 'Tartalom',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Hírek',
        ],
        'nav' => [
            'label' => 'Hírek listája',
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
            'status_draft' => 'Vázlat',
            'external_link' => 'Külső hivatkozás',
        ],
        'info' => [
            'select_categories' => 'Kategóriák kiválasztása',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Hírkategóriák',
        ],
        'nav' => [
            'label' => 'Hírkategóriák',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Hírcímkék',
        ],
        'nav' => [
            'label' => 'Hírcímkék',
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
