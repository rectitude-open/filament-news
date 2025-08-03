<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Notícias',
            'group' => 'Conteúdo',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Notícias',
        ],
        'nav' => [
            'label' => 'Lista de Notícias',
            'group' => '',
        ],
        'field' => [
            'content' => 'Conteúdo',
            'title' => 'Título',
            'taxonomy' => 'Taxonomia',
            'categories' => 'Categorias',
            'tags' => 'Tags',
            'featured_image' => 'Imagem de Destaque',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Resumo',
            'weight' => 'Peso',
            'status' => 'Status',
            'created_at' => 'Criado em',
            'status_published' => 'Publicado',
            'status_draft' => 'Rascunho',
            'external_link' => 'Link Externo',
        ],
        'info' => [
            'select_categories' => 'Selecionar Categorias',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Categorias de Notícias',
        ],
        'nav' => [
            'label' => 'Categorias de Notícias',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Tags de Notícias',
        ],
        'nav' => [
            'label' => 'Tags de Notícias',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'weight' => 'Peso',
            'count' => 'Quantidade',
        ],
    ],
];
