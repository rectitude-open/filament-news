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
            'group' => 'Contenido',
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
            'created_at' => 'Creado el',
            'status_active' => 'Activo',
            'status_suspended' => 'Suspendido',
        ],
        'info' => [
            'select_categories' => 'Seleccionar categorías',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Categorías de noticias',
            'group' => 'Contenido',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Etiquetas',
            'group' => 'Contenido',
        ],
        'field' => [
            'name' => 'Nombre',
            'slug' => 'Slug',
            'weight' => 'Peso',
            'count' => 'Cantidad',
        ],
    ],
];
