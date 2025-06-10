<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Haberler',
            'group' => 'İçerik',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Haberler',
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
            'created_at' => 'Oluşturulma Tarihi',
            'status_active' => 'Aktif',
            'status_suspended' => 'Askıda',
        ],
        'info' => [
            'select_categories' => 'Kategorileri seç',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Haber Kategorileri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Etiketler',
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
