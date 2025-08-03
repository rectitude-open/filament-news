<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'الأخبار',
            'group' => 'المحتوى',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'الأخبار',
        ],
        'nav' => [
            'label' => 'قائمة الأخبار',
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
            'meta' => 'بيانات وصفية',
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
        'resource' => [
            'label' => 'فئات الأخبار',
        ],
        'nav' => [
            'label' => 'فئات الأخبار',
            'group' => '',
        ],
        'field' => [
            'title' => 'العنوان',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'وسوم الأخبار',
        ],
        'nav' => [
            'label' => 'وسوم الأخبار',
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
