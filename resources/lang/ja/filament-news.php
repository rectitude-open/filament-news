<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'ニュース',
            'group' => 'コンテンツ',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'ニュース',
        ],
        'nav' => [
            'label' => 'ニュース一覧',
            'group' => '',
        ],
        'field' => [
            'content' => '内容',
            'title' => 'タイトル',
            'taxonomy' => '分類',
            'categories' => 'カテゴリ',
            'tags' => 'タグ',
            'featured_image' => 'アイキャッチ画像',
            'seo' => 'SEO',
            'meta' => 'メタ',
            'slug' => 'スラッグ',
            'summary' => '概要',
            'weight' => '重み',
            'status' => 'ステータス',
            'created_at' => '作成日',
            'status_published' => '公開済み',
            'status_draft' => '下書き',
            'external_link' => '外部リンク',
        ],
        'info' => [
            'select_categories' => 'カテゴリを選択',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'ニュースカテゴリ',
        ],
        'nav' => [
            'label' => 'ニュースカテゴリ',
            'group' => '',
        ],
        'field' => [
            'title' => 'タイトル',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'ニュースタグ',
        ],
        'nav' => [
            'label' => 'ニュースタグ',
            'group' => '',
        ],
        'field' => [
            'name' => '名前',
            'slug' => 'スラッグ',
            'weight' => '重み',
            'count' => '件数',
        ],
    ],
];
