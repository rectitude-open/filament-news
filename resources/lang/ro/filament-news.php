<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Știri',
            'group' => 'Conținut',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Știri',
        ],
        'nav' => [
            'label' => 'Lista știrilor',
            'group' => '',
        ],
        'field' => [
            'content' => 'Conținut',
            'title' => 'Titlu',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Categorii',
            'tags' => 'Etichete',
            'featured_image' => 'Imagine principală',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Rezumat',
            'weight' => 'Greutate',
            'status' => 'Stare',
            'created_at' => 'Creat la',
            'status_published' => 'Publicat',
            'status_draft' => 'Ciornă',
            'external_link' => 'Link extern',
        ],
        'info' => [
            'select_categories' => 'Selectați categorii',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Categorii de știri',
        ],
        'nav' => [
            'label' => 'Categorii de știri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titlu',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Etichete de știri',
        ],
        'nav' => [
            'label' => 'Etichete de știri',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nume',
            'slug' => 'Slug',
            'weight' => 'Greutate',
            'count' => 'Număr',
        ],
    ],
];
