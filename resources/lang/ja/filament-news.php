<?php

return [
    'news' => [
        'nav' => [
            'label' => 'ニュース',
            'group' => 'コンテンツ',
        ],
        'field' => [
            'content' => '内容',
            'title' => 'タイトル',
            'taxonomy' => '分類',
            'categories' => 'カテゴリー',
            'tags' => 'タグ',
            'featured_image' => 'アイキャッチ画像',
            'seo' => 'SEO',
            'meta' => 'メタ',
            'slug' => 'スラッグ',
            'summary' => '概要',
            'weight' => '重み',
            'status' => 'ステータス',
            'created_at' => '作成日',
            'status_active' => '有効',
            'status_suspended' => '停止',
        ],
        'info' => [
            'select_categories' => 'カテゴリーを選択',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'ニュースカテゴリ',
            'group' => 'コンテンツ',
        ],
        'field' => [
            'title' => 'タイトル',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'タグ',
            'group' => 'コンテンツ',
        ],
        'field' => [
            'name' => '名前',
            'slug' => 'スラッグ',
            'weight' => '重み',
            'count' => '数',
        ],
    ],
];
