<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Știri',
            'group' => 'Conținut',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Știri',
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
            'status_active' => 'Activ',
            'status_suspended' => 'Suspendat',
        ],
        'info' => [
            'select_categories' => 'Selectați categorii',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Categorii de știri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titlu',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Etichete',
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
