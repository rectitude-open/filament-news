<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'სიახლეები',
            'group' => 'შინაარსი',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'სიახლეები',
            'group' => '',
        ],
        'field' => [
            'content' => 'შინაარსი',
            'title' => 'სათაური',
            'taxonomy' => 'ტაქსონომია',
            'categories' => 'კატეგორიები',
            'tags' => 'თეგები',
            'featured_image' => 'გამორჩეული სურათი',
            'seo' => 'SEO',
            'meta' => 'მეტა',
            'slug' => 'სლაგი',
            'summary' => 'შეჯამება',
            'weight' => 'წონა',
            'status' => 'სტატუსი',
            'created_at' => 'შექმნის თარიღი',
            'status_published' => 'გამოქვეყნებული',
            'status_draft' => 'მონახაზი',
        ],
        'info' => [
            'select_categories' => 'აირჩიეთ კატეგორიები',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'სიახლეების კატეგორიები',
            'group' => '',
        ],
        'field' => [
            'title' => 'სათაური',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'თეგები',
            'group' => '',
        ],
        'field' => [
            'name' => 'სახელი',
            'slug' => 'სლაგი',
            'weight' => 'წონა',
            'count' => 'რაოდენობა',
        ],
    ],
];
