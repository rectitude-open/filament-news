<?php

return [
    'news' => [
        'nav' => [
            'label' => 'اخبار',
            'group' => 'محتوا',
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
            'status_active' => 'فعال',
            'status_suspended' => 'معلق',
        ],
        'info' => [
            'select_categories' => 'انتخاب دسته‌بندی‌ها',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'دسته‌بندی اخبار',
            'group' => 'محتوا',
        ],
        'field' => [
            'title' => 'عنوان',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'برچسب‌ها',
            'group' => 'محتوا',
        ],
        'field' => [
            'name' => 'نام',
            'slug' => 'نامک',
            'weight' => 'وزن',
            'count' => 'تعداد',
        ],
    ],
];
