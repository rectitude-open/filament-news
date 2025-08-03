<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'اخبار',
            'group' => 'محتوا',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'اخبار',
        ],
        'nav' => [
            'label' => 'لیست اخبار',
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
            'external_link' => 'لینک خارجی',
        ],
        'info' => [
            'select_categories' => 'انتخاب دسته‌بندی‌ها',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'دسته‌بندی‌های اخبار',
        ],
        'nav' => [
            'label' => 'دسته‌بندی‌های اخبار',
            'group' => '',
        ],
        'field' => [
            'title' => 'عنوان',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'برچسب‌های اخبار',
        ],
        'nav' => [
            'label' => 'برچسب‌های اخبار',
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
