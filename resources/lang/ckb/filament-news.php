<?php

return [
    'news' => [
        'nav' => [
            'label' => 'نووسینەکان',
            'group' => 'ناوەڕۆک',
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
            'group' => 'ناوەڕۆک',
        ],
        'field' => [
            'title' => 'ناونیشان',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'تاگەکان',
            'group' => 'ناوەڕۆک',
        ],
        'field' => [
            'name' => 'ناو',
            'slug' => 'سلەگ',
            'weight' => 'گرنگی',
            'count' => 'ژمارە',
        ],
    ],
];
