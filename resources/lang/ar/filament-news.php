<?php

return [
    'news' => [
        'nav' => [
            'label' => 'الأخبار',
            'group' => 'المحتوى',
        ],
        'field' => [
            'content' => 'المحتوى',
            'title' => 'العنوان',
            'taxonomy' => 'التصنيف',
            'categories' => 'الفئات',
            'tags' => 'الوسوم',
            'featured_image' => 'الصورة المميزة',
            'seo' => 'تحسين محركات البحث',
            'meta' => 'ميتا',
            'slug' => 'الرابط',
            'summary' => 'الملخص',
            'weight' => 'الترتيب',
            'status' => 'الحالة',
            'created_at' => 'تاريخ الإنشاء',
            'status_active' => 'نشط',
            'status_suspended' => 'معلق',
        ],
        'info' => [
            'select_categories' => 'اختر الفئات',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'فئات الأخبار',
            'group' => 'المحتوى',
        ],
        'field' => [
            'title' => 'العنوان',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'الوسوم',
            'group' => 'المحتوى',
        ],
        'field' => [
            'name' => 'الاسم',
            'slug' => 'الرابط',
            'weight' => 'الترتيب',
            'count' => 'العدد',
        ],
    ],
];
