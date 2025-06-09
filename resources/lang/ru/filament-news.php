<?php

return [
    'news' => [
        'nav' => [
            'label' => 'Новости',
            'group' => 'Контент',
        ],
        'field' => [
            'content' => 'Содержание',
            'title' => 'Заголовок',
            'taxonomy' => 'Таксономия',
            'categories' => 'Категории',
            'tags' => 'Теги',
            'featured_image' => 'Изображение',
            'seo' => 'SEO',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'summary' => 'Кратко',
            'weight' => 'Вес',
            'status' => 'Статус',
            'created_at' => 'Дата создания',
            'status_active' => 'Активно',
            'status_suspended' => 'Приостановлено',
        ],
        'info' => [
            'select_categories' => 'Выбрать категории',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Категории новостей',
            'group' => 'Контент',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Теги',
            'group' => 'Контент',
        ],
        'field' => [
            'name' => 'Имя',
            'slug' => 'Слаг',
            'weight' => 'Вес',
            'count' => 'Количество',
        ],
    ],
];
