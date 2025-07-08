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
            'taxonomy' => 'Taksonomi',
            'categories' => 'Kategoriler',
            'tags' => 'Etiketler',
            'featured_image' => 'Öne Çıkan Görsel',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Özet',
            'weight' => 'Ağırlık',
            'status' => 'Durum',
            'created_at' => 'Oluşturulma Tarihi',
            'status_published' => 'Yayınlandı',
            'status_draft' => 'Taslak',
        ],
        'info' => [
            'select_categories' => 'Kategorileri seçin',
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
            'slug' => 'Slug',
            'weight' => 'Ağırlık',
            'count' => 'Sayı',
        ],
    ],
];
