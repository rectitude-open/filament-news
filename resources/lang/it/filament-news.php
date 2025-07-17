<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Notizie',
            'group' => 'Contenuto',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Notizie',
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
            'external_link' => 'Link esterno',
        ],
        'info' => [
            'select_categories' => 'Seleziona categorie',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Categorie di notizie',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titolo',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tag',
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
