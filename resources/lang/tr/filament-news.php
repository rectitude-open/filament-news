<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Haberler',
            'group' => 'İçerik',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Haberler',
        ],
        'nav' => [
            'label' => 'Haber Listesi',
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
            'external_link' => 'Harici Bağlantı',
        ],
        'info' => [
            'select_categories' => 'Kategorileri Seçin',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Haber Kategorileri',
        ],
        'nav' => [
            'label' => 'Haber Kategorileri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Haber Etiketleri',
        ],
        'nav' => [
            'label' => 'Haber Etiketleri',
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
