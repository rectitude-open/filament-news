<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'اخبار',
            'group' => 'محتوا',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'اخبار',
            'group' => '',
        ],
        'field' => [
            'content' => 'محتوا',
            'title' => 'عنوان',
            'taxonomy' => 'رده‌بندی',
            'categories' => 'دسته‌بندی‌ها',
            'tags' => 'برچسب‌ها',
            'featured_image' => 'تصویر شاخص',
            'seo' => 'سئو',
            'meta' => 'متا',
            'slug' => 'نامک',
            'summary' => 'خلاصه',
            'weight' => 'وزن',
            'status' => 'وضعیت',
            'created_at' => 'تاریخ ایجاد',
            'status_published' => 'منتشر شده',
            'status_draft' => 'پیش‌نویس',
        ],
        'info' => [
            'select_categories' => 'انتخاب دسته‌بندی‌ها',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'دسته‌بندی اخبار',
            'group' => '',
        ],
        'field' => [
            'title' => 'عنوان',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'برچسب‌ها',
            'group' => '',
        ],
        'field' => [
            'name' => 'نام',
            'slug' => 'نامک',
            'weight' => 'وزن',
            'count' => 'تعداد',
        ],
    ],
];
