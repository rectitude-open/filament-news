<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Новости',
            'group' => 'Контент',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Новости',
        ],
        'nav' => [
            'label' => 'Список новостей',
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
            'created_at' => 'Дата создания',
            'status_published' => 'Опубликовано',
            'status_draft' => 'Черновик',
            'external_link' => 'Внешняя ссылка',
        ],
        'info' => [
            'select_categories' => 'Выберите категории',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Категории новостей',
        ],
        'nav' => [
            'label' => 'Категории новостей',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Теги новостей',
        ],
        'nav' => [
            'label' => 'Теги новостей',
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
