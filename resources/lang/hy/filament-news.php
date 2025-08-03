<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Նորություններ',
            'group' => 'Բովանդակություն',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Նորություններ',
        ],
        'nav' => [
            'label' => 'Նորությունների ցանկ',
            'group' => '',
        ],
        'field' => [
            'content' => 'Բովանդակություն',
            'title' => 'Վերնագիր',
            'taxonomy' => 'Տաքսոնոմիա',
            'categories' => 'Կատեգորիաներ',
            'tags' => 'Պիտակներ',
            'featured_image' => 'Գլխավոր պատկեր',
            'seo' => 'SEO',
            'meta' => 'Մետա',
            'slug' => 'Slug',
            'summary' => 'Ամփոփում',
            'weight' => 'Քաշ',
            'status' => 'Կարգավիճակ',
            'created_at' => 'Ստեղծվել է',
            'status_published' => 'Հրապարակված',
            'status_draft' => 'Սևագիր',
            'external_link' => 'Արտաքին հղում',
        ],
        'info' => [
            'select_categories' => 'Ընտրեք կատեգորիաներ',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Նորությունների կատեգորիաներ',
        ],
        'nav' => [
            'label' => 'Նորությունների կատեգորիաներ',
            'group' => '',
        ],
        'field' => [
            'title' => 'Վերնագիր',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Նորությունների պիտակներ',
        ],
        'nav' => [
            'label' => 'Նորությունների պիտակներ',
            'group' => '',
        ],
        'field' => [
            'name' => 'Անուն',
            'slug' => 'Slug',
            'weight' => 'Քաշ',
            'count' => 'Քանակ',
        ],
    ],
];
