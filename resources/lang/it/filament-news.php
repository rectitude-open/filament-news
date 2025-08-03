<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Notizie',
            'group' => 'Contenuto',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Notizie',
        ],
        'nav' => [
            'label' => 'Elenco Notizie',
            'group' => '',
        ],
        'field' => [
            'content' => 'Contenuto',
            'title' => 'Titolo',
            'taxonomy' => 'Tassonomia',
            'categories' => 'Categorie',
            'tags' => 'Tag',
            'featured_image' => 'Immagine in evidenza',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Sommario',
            'weight' => 'Peso',
            'status' => 'Stato',
            'created_at' => 'Creato il',
            'status_published' => 'Pubblicato',
            'status_draft' => 'Bozza',
            'external_link' => 'Link Esterno',
        ],
        'info' => [
            'select_categories' => 'Seleziona Categorie',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Categorie Notizie',
        ],
        'nav' => [
            'label' => 'Categorie Notizie',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titolo',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Tag Notizie',
        ],
        'nav' => [
            'label' => 'Tag Notizie',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'weight' => 'Peso',
            'count' => 'Conteggio',
        ],
    ],
];
