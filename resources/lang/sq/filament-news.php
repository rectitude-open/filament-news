<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Lajme',
            'group' => 'Përmbajtje',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Lajme',
            'group' => '',
        ],
        'field' => [
            'content' => 'Përmbajtje',
            'title' => 'Titulli',
            'taxonomy' => 'Taksonomia',
            'categories' => 'Kategoritë',
            'tags' => 'Etiketat',
            'featured_image' => 'Imazhi kryesor',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Përmbledhje',
            'weight' => 'Pesha',
            'status' => 'Statusi',
            'created_at' => 'Krijuar më',
            'status_published' => 'Publikuar',
            'status_draft' => 'Draft',
            'external_link' => 'Lidhje e jashtme',
        ],
        'info' => [
            'select_categories' => 'Zgjidhni kategoritë',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategoritë e lajmeve',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titulli',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Etiketat',
            'group' => '',
        ],
        'field' => [
            'name' => 'Emri',
            'slug' => 'Slug',
            'weight' => 'Pesha',
            'count' => 'Numri',
        ],
    ],
];
