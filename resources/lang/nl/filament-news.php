<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Nieuws',
            'group' => 'Inhoud',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Nieuws',
        ],
        'nav' => [
            'label' => 'Nieuwslijst',
            'group' => '',
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
            'status_published' => 'Gepubliceerd',
            'status_draft' => 'Concept',
            'external_link' => 'Externe link',
        ],
        'info' => [
            'select_categories' => 'Selecteer categorieën',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Nieuwscategorieën',
        ],
        'nav' => [
            'label' => 'Nieuwscategorieën',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Nieuwstags',
        ],
        'nav' => [
            'label' => 'Nieuwstags',
            'group' => '',
        ],
        'field' => [
            'name' => 'Naam',
            'slug' => 'Slug',
            'weight' => 'Gewicht',
            'count' => 'Aantal',
        ],
    ],
];
