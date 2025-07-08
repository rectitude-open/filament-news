<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Berita',
            'group' => 'Konten',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Berita',
            'group' => '',
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
            'status_published' => 'Dipublikasikan',
            'status_draft' => 'Draf',
        ],
        'info' => [
            'select_categories' => 'Pilih Kategori',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Kategori Berita',
            'group' => '',
        ],
        'field' => [
            'title' => 'Judul',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tag',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nama',
            'slug' => 'Slug',
            'weight' => 'Bobot',
            'count' => 'Jumlah',
        ],
    ],
];
