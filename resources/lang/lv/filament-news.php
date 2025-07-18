<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Ziņas',
            'group' => 'Saturs',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Ziņas',
            'group' => '',
        ],
        'field' => [
            'content' => 'Saturs',
            'title' => 'Virsraksts',
            'taxonomy' => 'Taksonomija',
            'categories' => 'Kategorijas',
            'tags' => 'Birkas',
            'featured_image' => 'Galvenais attēls',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Kopsavilkums',
            'weight' => 'Svars',
            'status' => 'Statuss',
            'created_at' => 'Izveidots',
            'status_published' => 'Publicēts',
            'status_draft' => 'Melnraksts',
            'external_link' => 'Ārējā saite',
        ],
        'info' => [
            'select_categories' => 'Izvēlieties kategorijas',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Ziņu kategorijas',
            'group' => '',
        ],
        'field' => [
            'title' => 'Virsraksts',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Birkas',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nosaukums',
            'slug' => 'Slug',
            'weight' => 'Svars',
            'count' => 'Skaits',
        ],
    ],
];
