<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'الأخبار',
            'group' => 'المحتوى',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'الأخبار',
            'group' => '',
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
            'slug' => 'المعرف',
            'summary' => 'الملخص',
            'weight' => 'الترتيب',
            'status' => 'الحالة',
            'created_at' => 'تاريخ الإنشاء',
            'status_published' => 'منشور',
            'status_draft' => 'مسودة',
            'external_link' => 'رابط خارجي',
        ],
        'info' => [
            'select_categories' => 'اختر الفئات',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'فئات الأخبار',
            'group' => '',
        ],
        'field' => [
            'title' => 'العنوان',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'الوسوم',
            'group' => '',
        ],
        'field' => [
            'name' => 'الاسم',
            'slug' => 'المعرف',
            'weight' => 'الترتيب',
            'count' => 'العدد',
        ],
    ],
];
