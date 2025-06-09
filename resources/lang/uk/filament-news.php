<?php

return [
    'news' => [
        'nav' => [
            'label' => 'Haberler',
            'group' => 'İçerik',
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
            'label' => 'Haber Kategorileri',
            'group' => 'İçerik',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Etiketler',
            'group' => 'İçerik',
        ],
        'field' => [
            'name' => 'Adı',
            'slug' => 'Kısa ad',
            'weight' => 'Ağırlık',
            'count' => 'Sayı',
        ],
    ],
];
