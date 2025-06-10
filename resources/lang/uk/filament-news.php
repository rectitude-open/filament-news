<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Новини',
            'group' => 'Контент',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Новини',
            'group' => '',
        ],
        'field' => [
            'content' => 'İçerik',
            'title' => 'Başlık',
            'taxonomy' => 'Sınıflandırma',
            'categories' => 'Kategoriler',
            'tags' => 'Etiketler',
            'featured_image' => 'Öne çıkan görsel',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Kısa ad',
            'summary' => 'Özet',
            'weight' => 'Ağırlık',
            'status' => 'Durum',
            'status_active' => 'Aktif',
            'status_suspended' => 'Askıda',
            'created_at' => 'Oluşturulma Tarihi',
        ],
        'info' => [
            'select_categories' => 'Kategorileri seç',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Категорії новин',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Теги',
            'group' => '',
        ],
        'field' => [
            'name' => 'Adı',
            'slug' => 'Kısa ad',
            'weight' => 'Ağırlık',
            'count' => 'Sayı',
        ],
    ],
];
