<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'هەواڵ',
            'group' => 'ناوەڕۆک',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'هەواڵ',
            'group' => '',
        ],
        'field' => [
            'content' => 'ناوەڕۆک',
            'title' => 'ناونیشان',
            'taxonomy' => 'پۆل',
            'categories' => 'هاوپۆلەکان',
            'tags' => 'تاگەکان',
            'featured_image' => 'وێنەی تایبەت',
            'seo' => 'SEO',
            'meta' => 'مێتا',
            'slug' => 'سلەگ',
            'summary' => 'پوختە',
            'weight' => 'پێوانە',
            'status' => 'دۆخ',
            'created_at' => 'دروستکراوە لە',
            'status_published' => 'بڵاوکراوەتەوە',
            'status_draft' => 'پڕۆژە',
            'external_link' => 'بەستەری دەرەکی',
        ],
        'info' => [
            'select_categories' => 'هاوپۆل هەلبژێرە',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'هاوپۆلەکانی هەواڵ',
            'group' => '',
        ],
        'field' => [
            'title' => 'ناونیشان',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'تاگەکان',
            'group' => '',
        ],
        'field' => [
            'name' => 'ناو',
            'slug' => 'سلەگ',
            'weight' => 'پێوانە',
            'count' => 'ژمارە',
        ],
    ],
];
