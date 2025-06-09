<?php

return [
    'news' => [
        'nav' => [
            'label' => '뉴스',
            'group' => '콘텐츠',
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
            'status_active' => '활성',
            'status_suspended' => '중지',
        ],
        'info' => [
            'select_categories' => '카테고리 선택',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => '뉴스 카테고리',
            'group' => '콘텐츠',
        ],
        'field' => [
            'title' => '제목',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => '태그',
            'group' => '콘텐츠',
        ],
        'field' => [
            'name' => '이름',
            'slug' => '슬러그',
            'weight' => '가중치',
            'count' => '개수',
        ],
    ],
];
