<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'ახალი ამბები',
            'group' => 'შინაარსი',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'ახალი ამბები',
            'group' => 'შინაარსი',
        ],
        'field' => [
            'content' => 'შინაარსი',
            'title' => 'სათაური',
            'taxonomy' => 'ტაქსონომია',
            'categories' => 'კატეგორიები',
            'tags' => 'ჭდეები',
            'featured_image' => 'გამორჩეული სურათი',
            'seo' => 'SEO',
            'meta' => 'მეტა',
            'slug' => 'სლაგი',
            'summary' => 'შეჯამება',
            'weight' => 'წონა',
            'status' => 'სტატუსი',
            'created_at' => 'შექმნის თარიღი',
            'status_active' => 'აქტიური',
            'status_suspended' => 'შეჩერებული',
        ],
        'info' => [
            'select_categories' => 'აირჩიეთ კატეგორიები',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'ახალი ამბების კატეგორიები',
            'group' => 'შინაარსი',
        ],
        'field' => [
            'title' => 'სათაური',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'ჭდეები',
            'group' => 'შინაარსი',
        ],
        'field' => [
            'name' => 'სახელი',
            'slug' => 'სლაგი',
            'weight' => 'წონა',
            'count' => 'რაოდენობა',
        ],
    ],
];
