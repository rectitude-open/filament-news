<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Berita',
            'group' => 'Konten',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Berita',
        ],
        'nav' => [
            'label' => 'Daftar Berita',
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
            'created_at' => 'Dibuat Pada',
            'status_published' => 'Dipublikasikan',
            'status_draft' => 'Draft',
            'external_link' => 'Tautan Eksternal',
        ],
        'info' => [
            'select_categories' => 'Pilih Kategori',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Kategori Berita',
        ],
        'nav' => [
            'label' => 'Kategori Berita',
            'group' => '',
        ],
        'field' => [
            'title' => 'Judul',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Tag Berita',
        ],
        'nav' => [
            'label' => 'Tag Berita',
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
