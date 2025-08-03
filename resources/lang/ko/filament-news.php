<?php

return [
    'cluster' => [
        'nav' => [
            'label' => '뉴스',
            'group' => '콘텐츠',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => '뉴스',
        ],
        'nav' => [
            'label' => '뉴스 목록',
            'group' => '',
        ],
        'field' => [
            'content' => '내용',
            'title' => '제목',
            'taxonomy' => '분류',
            'categories' => '카테고리',
            'tags' => '태그',
            'featured_image' => '대표 이미지',
            'seo' => 'SEO',
            'meta' => '메타',
            'slug' => '슬러그',
            'summary' => '요약',
            'weight' => '가중치',
            'status' => '상태',
            'created_at' => '생성일',
            'status_published' => '게시됨',
            'status_draft' => '임시저장',
            'external_link' => '외부 링크',
        ],
        'info' => [
            'select_categories' => '카테고리 선택',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => '뉴스 카테고리',
        ],
        'nav' => [
            'label' => '뉴스 카테고리',
            'group' => '',
        ],
        'field' => [
            'title' => '제목',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => '뉴스 태그',
        ],
        'nav' => [
            'label' => '뉴스 태그',
            'group' => '',
        ],
        'field' => [
            'name' => '이름',
            'slug' => '슬러그',
            'weight' => '가중치',
            'count' => '개수',
        ],
    ],
];
