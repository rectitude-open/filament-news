<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'هەواڵ',
            'group' => 'ناوەڕۆک',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'هەواڵ',
        ],
        'nav' => [
            'label' => 'لیستی هەواڵ',
            'group' => '',
        ],
        'field' => [
            'content' => 'ناوەڕۆک',
            'title' => 'ناونیشان',
            'taxonomy' => 'جۆر',
            'categories' => 'پۆلەکان',
            'tags' => 'تاگەکان',
            'featured_image' => 'وێنەی تایبەت',
            'seo' => 'SEO',
            'meta' => 'زانیاری',
            'slug' => 'ناو',
            'summary' => 'پوختە',
            'weight' => 'ڕیزبەندی',
            'status' => 'دۆخ',
            'created_at' => 'دروستکراوە',
            'status_published' => 'بڵاوکراوە',
            'status_draft' => 'پڕۆژە',
            'external_link' => 'بەستەری دەرەکی',
        ],
        'info' => [
            'select_categories' => 'پۆلەکان هەڵبژێرە',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'پۆلەکانی هەواڵ',
        ],
        'nav' => [
            'label' => 'پۆلەکانی هەواڵ',
            'group' => '',
        ],
        'field' => [
            'title' => 'ناونیشان',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'تاگەکانی هەواڵ',
        ],
        'nav' => [
            'label' => 'تاگەکانی هەواڵ',
            'group' => '',
        ],
        'field' => [
            'name' => 'ناو',
            'slug' => 'ناو',
            'weight' => 'ڕیزبەندی',
            'count' => 'ژمارە',
        ],
    ],
];
