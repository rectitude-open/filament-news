<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Nieuws',
            'group' => 'Inhoud',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Nieuws',
            'group' => 'Inhoud',
        ],
        'field' => [
            'content' => 'Inhoud',
            'title' => 'Titel',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Categorieën',
            'tags' => 'Tags',
            'featured_image' => 'Uitgelichte afbeelding',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Samenvatting',
            'weight' => 'Gewicht',
            'status' => 'Status',
            'created_at' => 'Aangemaakt op',
            'status_active' => 'Actief',
            'status_suspended' => 'Opgeschort',
        ],
        'info' => [
            'select_categories' => 'Selecteer categorieën',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Nieuwscategorieën',
            'group' => 'Inhoud',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tags',
            'group' => 'Inhoud',
        ],
        'field' => [
            'name' => 'Naam',
            'slug' => 'Slug',
            'weight' => 'Gewicht',
            'count' => 'Aantal',
        ],
    ],
];
