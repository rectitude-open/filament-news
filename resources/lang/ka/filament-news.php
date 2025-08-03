<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'სიახლეები',
            'group' => 'შინაარსი',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'სიახლეები',
        ],
        'nav' => [
            'label' => 'სიახლეების სია',
            'group' => '',
        ],
        'field' => [
            'content' => 'შინაარსი',
            'title' => 'სათაური',
            'taxonomy' => 'ტაქსონომია',
            'categories' => 'კატეგორიები',
            'tags' => 'ტეგები',
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
            'external_link' => 'გარე ბმული',
        ],
        'info' => [
            'select_categories' => 'აირჩიეთ კატეგორიები',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'სიახლეების კატეგორიები',
        ],
        'nav' => [
            'label' => 'სიახლეების კატეგორიები',
            'group' => '',
        ],
        'field' => [
            'title' => 'სათაური',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'სიახლეების ტეგები',
        ],
        'nav' => [
            'label' => 'სიახლეების ტეგები',
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
