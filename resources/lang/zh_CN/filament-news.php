<?php

return [
    'news' => [
        'nav' => [
            'label' => '新闻',
            'group' => '内容',
        ],
        'field' => [
            'content' => '内容',
            'title' => '标题',
            'taxonomy' => '分类',
            'categories' => '类别',
            'tags' => '标签',
            'featured_image' => '特色图片',
            'seo' => 'SEO',
            'meta' => '元数据',
            'slug' => '别名',
            'summary' => '摘要',
            'weight' => '权重',
            'status' => '状态',
            'created_at' => '创建时间',
            'status_active' => '启用',
            'status_suspended' => '停用',
        ],
        'info' => [
            'select_categories' => '选择类别',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => '新闻类别',
            'group' => '内容',
        ],
        'field' => [
            'title' => '标题',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => '标签',
            'group' => '内容',
        ],
        'field' => [
            'name' => '名称',
            'slug' => '别名',
            'weight' => '权重',
            'count' => '数量',
        ],
    ],
];
