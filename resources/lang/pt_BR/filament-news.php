<?php

return [
    'news' => [
        'nav' => [
            'label' => 'Notícias',
            'group' => 'Conteúdo',
        ],
        'field' => [
            'content' => 'Conteúdo',
            'title' => 'Título',
            'taxonomy' => 'Taxonomia',
            'categories' => 'Categorias',
            'tags' => 'Tags',
            'featured_image' => 'Imagem destacada',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Resumo',
            'weight' => 'Peso',
            'status' => 'Status',
            'created_at' => 'Criado em',
            'status_active' => 'Ativo',
            'status_suspended' => 'Suspenso',
        ],
        'info' => [
            'select_categories' => 'Selecionar categorias',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Categorias de notícias',
            'group' => 'Conteúdo',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tags',
            'group' => 'Conteúdo',
        ],
        'field' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'weight' => 'Peso',
            'count' => 'Quantidade',
        ],
    ],
];
