<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Nachrichten',
            'group' => 'Inhalt',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Nachrichten',
        ],
        'nav' => [
            'label' => 'Nachrichtenliste',
            'group' => '',
        ],
        'field' => [
            'content' => 'Inhalt',
            'title' => 'Titel',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Kategorien',
            'tags' => 'Tags',
            'featured_image' => 'Titelbild',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Zusammenfassung',
            'weight' => 'Gewichtung',
            'status' => 'Status',
            'created_at' => 'Erstellt am',
            'status_published' => 'Veröffentlicht',
            'status_draft' => 'Entwurf',
            'external_link' => 'Externer Link',
        ],
        'info' => [
            'select_categories' => 'Kategorien auswählen',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Nachrichtenkategorien',
        ],
        'nav' => [
            'label' => 'Nachrichtenkategorien',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Nachrichtentags',
        ],
        'nav' => [
            'label' => 'Nachrichtentags',
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
