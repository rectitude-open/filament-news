<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'نووسینەکان',
            'group' => 'ناوەرۆک',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'نووسینەکان',
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
            'weight' => 'گرنگی',
            'status' => 'دۆخ',
            'created_at' => 'دروستکراوە لە',
            'status_active' => 'چالاک',
            'status_suspended' => 'وەستاندراو',
        ],
        'info' => [
            'select_categories' => 'هاوپۆل هەڵبژێرە',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'هاوپۆلە نووسینەکان',
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
            'weight' => 'گرنگی',
            'count' => 'ژمارە',
        ],
    ],
];
