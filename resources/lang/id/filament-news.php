<?php

return [
    'news' => [
        'nav' => [
            'label' => 'Berita',
            'group' => 'Konten',
        ],
        'field' => [
            'content' => 'Konten',
            'title' => 'Judul',
            'taxonomy' => 'Taksonomi',
            'categories' => 'Kategori',
            'tags' => 'Tag',
            'featured_image' => 'Gambar Unggulan',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Ringkasan',
            'weight' => 'Bobot',
            'status' => 'Status',
            'created_at' => 'Dibuat pada',
            'status_active' => 'Aktif',
            'status_suspended' => 'Ditangguhkan',
        ],
        'info' => [
            'select_categories' => 'Pilih Kategori',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategori Berita',
            'group' => 'Konten',
        ],
        'field' => [
            'title' => 'Judul',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tag',
            'group' => 'Konten',
        ],
        'field' => [
            'name' => 'Nama',
            'slug' => 'Slug',
            'weight' => 'Bobot',
            'count' => 'Jumlah',
        ],
    ],
];
