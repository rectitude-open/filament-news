<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Noticias',
            'group' => 'Contenido',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Noticias',
        ],
        'nav' => [
            'label' => 'Lista de noticias',
            'group' => '',
        ],
        'field' => [
            'content' => 'Contenido',
            'title' => 'Título',
            'taxonomy' => 'Taxonomía',
            'categories' => 'Categorías',
            'tags' => 'Etiquetas',
            'featured_image' => 'Imagen destacada',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Resumen',
            'weight' => 'Peso',
            'status' => 'Estado',
            'created_at' => 'Creado en',
            'status_published' => 'Publicado',
            'status_draft' => 'Borrador',
            'external_link' => 'Enlace externo',
        ],
        'info' => [
            'select_categories' => 'Seleccionar categorías',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Categorías de noticias',
        ],
        'nav' => [
            'label' => 'Categorías de noticias',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Etiquetas de noticias',
        ],
        'nav' => [
            'label' => 'Etiquetas de noticias',
            'group' => '',
        ],
        'field' => [
            'name' => 'Nombre',
            'slug' => 'Slug',
            'weight' => 'Peso',
            'count' => 'Cantidad',
        ],
    ],
];
