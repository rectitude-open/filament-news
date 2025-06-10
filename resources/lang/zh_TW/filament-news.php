<?php

return [
    'cluster' => [
        'nav' => [
            'label' => '新聞',
            'group' => '內容',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => '新聞',
            'group' => '',
        ],
        'field' => [
            'content' => '內容',
            'title' => '標題',
            'taxonomy' => '分類',
            'categories' => '類別',
            'tags' => '標籤',
            'featured_image' => '精選圖片',
            'seo' => 'SEO',
            'meta' => '中繼資料',
            'slug' => '別名',
            'summary' => '摘要',
            'weight' => '權重',
            'status' => '狀態',
            'created_at' => '建立時間',
            'status_active' => '啟用',
            'status_suspended' => '停用',
        ],
        'info' => [
            'select_categories' => '選擇類別',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => '新聞類別',
            'group' => '',
        ],
        'field' => [
            'title' => '標題',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => '標籤',
            'group' => '',
        ],
        'field' => [
            'name' => '名稱',
            'slug' => '別名',
            'weight' => '權重',
            'count' => '數量',
        ],
    ],
];
