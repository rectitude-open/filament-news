<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Новости',
            'group' => 'Контент',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Новости',
            'group' => '',
        ],
        'field' => [
            'content' => 'Контент',
            'title' => 'Заголовок',
            'taxonomy' => 'Таксономия',
            'categories' => 'Категории',
            'tags' => 'Теги',
            'featured_image' => 'Изображение',
            'seo' => 'SEO',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'summary' => 'Резюме',
            'weight' => 'Вес',
            'status' => 'Статус',
            'created_at' => 'Создано',
            'status_published' => 'Опубликовано',
            'status_draft' => 'Черновик',
        ],
        'info' => [
            'select_categories' => 'Выберите категории',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Категории новостей',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Теги',
            'group' => '',
        ],
        'field' => [
            'name' => 'Имя',
            'slug' => 'Слаг',
            'weight' => 'Вес',
            'count' => 'Количество',
        ],
    ],
];
