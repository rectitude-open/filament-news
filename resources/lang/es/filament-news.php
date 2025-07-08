<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Noticias',
            'group' => 'Contenido',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'Noticias',
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
        ],
        'info' => [
            'select_categories' => 'Seleccionar categorías',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Categorías de noticias',
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
            'name' => 'Nombre',
            'slug' => 'Slug',
            'weight' => 'Peso',
            'count' => 'Cantidad',
        ],
    ],
];
