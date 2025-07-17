<?php

return [
    'cluster' => [
        'nav' => [
            'label' => '新闻',
            'group' => '内容',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => '新闻',
            'group' => '',
        ],
        'field' => [
            'content' => '内容',
            'title' => '标题',
            'taxonomy' => '分类法',
            'categories' => '分类',
            'tags' => '标签',
            'featured_image' => '特色图片',
            'seo' => 'SEO',
            'meta' => '元信息',
            'slug' => '别名',
            'summary' => '摘要',
            'weight' => '权重',
            'status' => '状态',
            'created_at' => '创建时间',
            'status_published' => '已发布',
            'status_draft' => '草稿',
            'external_link' => '外部链接',
        ],
        'info' => [
            'select_categories' => '选择分类',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => '新闻分类',
            'group' => '',
        ],
        'field' => [
            'title' => '标题',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => '标签',
            'group' => '',
        ],
        'field' => [
            'name' => '名称',
            'slug' => '别名',
            'weight' => '权重',
            'count' => '数量',
        ],
    ],
];
