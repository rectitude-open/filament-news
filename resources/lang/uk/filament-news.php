<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Новини',
            'group' => 'Контент',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Новини',
        ],
        'nav' => [
            'label' => 'Список новин',
            'group' => '',
        ],
        'field' => [
            'content' => 'Контент',
            'title' => 'Заголовок',
            'taxonomy' => 'Таксономія',
            'categories' => 'Категорії',
            'tags' => 'Теги',
            'featured_image' => 'Головне зображення',
            'seo' => 'SEO',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'summary' => 'Резюме',
            'weight' => 'Вага',
            'status' => 'Статус',
            'created_at' => 'Дата створення',
            'status_published' => 'Опубліковано',
            'status_draft' => 'Чернетка',
            'external_link' => 'Зовнішнє посилання',
        ],
        'info' => [
            'select_categories' => 'Виберіть категорії',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Категорії новин',
        ],
        'nav' => [
            'label' => 'Категорії новин',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Теги новин',
        ],
        'nav' => [
            'label' => 'Теги новин',
            'group' => '',
        ],
        'field' => [
            'name' => 'Ім’я',
            'slug' => 'Слаг',
            'weight' => 'Вага',
            'count' => 'Кількість',
        ],
    ],
];
