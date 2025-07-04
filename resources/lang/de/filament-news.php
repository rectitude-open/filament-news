<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Nachrichten',
            'group' => 'Inhalt',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Nachrichten',
            'group' => '',
        ],
        'field' => [
            'content' => 'Inhalt',
            'title' => 'Titel',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Kategorien',
            'tags' => 'Tags',
            'featured_image' => 'Beitragsbild',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Zusammenfassung',
            'weight' => 'Gewichtung',
            'status' => 'Status',
            'created_at' => 'Erstellt am',
            'status_active' => 'Aktiv',
            'status_suspended' => 'Ausgesetzt',
        ],
        'info' => [
            'select_categories' => 'Kategorien auswählen',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Nachrichtenkategorien',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tags',
            'group' => '',
        ],
        'field' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'weight' => 'Gewichtung',
            'count' => 'Anzahl',
        ],
    ],
];
