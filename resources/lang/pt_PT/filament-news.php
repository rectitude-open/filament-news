<?php

return [
    'news' => [
        'nav' => [
            'label' => 'Notícias',
            'group' => '',
        ],
        'field' => [
            'content' => 'Conteúdo',
            'title' => 'Título',
            'taxonomy' => 'Taxonomia',
            'categories' => 'Categorias',
            'tags' => 'Etiquetas',
            'featured_image' => 'Imagem em destaque',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Resumo',
            'weight' => 'Peso',
            'status' => 'Estado',
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
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Etiquetas',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'weight' => 'Peso',
            'count' => 'Quantidade',
        ],
    ],
    'cluster' => [
        'nav' => [
            'label' => 'Notícias',
            'group' => 'Conteúdo',
        ],
    ],
];
