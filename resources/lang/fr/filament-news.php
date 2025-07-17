<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Actualités',
            'group' => 'Contenu',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Actualités',
            'group' => '',
        ],
        'field' => [
            'content' => 'Contenu',
            'title' => 'Titre',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Catégories',
            'tags' => 'Tags',
            'featured_image' => 'Image à la une',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Résumé',
            'weight' => 'Poids',
            'status' => 'Statut',
            'created_at' => 'Créé le',
            'status_published' => 'Publié',
            'status_draft' => 'Brouillon',
            'external_link' => 'Lien externe',
        ],
        'info' => [
            'select_categories' => 'Sélectionner les catégories',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Catégories d’actualités',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titre',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tags',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nom',
            'slug' => 'Slug',
            'weight' => 'Poids',
            'count' => 'Nombre',
        ],
    ],
];
