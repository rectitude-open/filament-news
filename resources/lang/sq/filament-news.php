<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Lajme',
            'group' => 'Përmbajtje',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Lajme',
        ],
        'nav' => [
            'label' => 'Lista e lajmeve',
            'group' => '',
        ],
        'field' => [
            'content' => 'Përmbajtje',
            'title' => 'Titulli',
            'taxonomy' => 'Taksonomi',
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
        'resource' => [
            'label' => 'Kategoritë e lajmeve',
        ],
        'nav' => [
            'label' => 'Kategoritë e lajmeve',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titulli',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Etiketat e lajmeve',
        ],
        'nav' => [
            'label' => 'Etiketat e lajmeve',
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
