<?php

return [
    'news' => [
        'nav' => [
            'label' => 'News',
            'group' => 'Content',
        ],
        'field' => [
            'content' => 'Content',
            'title' => 'Title',
            'taxonomy' => 'Taxonomy',
            'categories' => 'Categories',
            'tags' => 'Tags',
            'featured_image' => 'Featured Image',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Summary',
            'weight' => 'Weight',
            'status' => 'Status',
            'created_at' => 'Created At',
            'status_active' => 'Active',
            'status_suspended' => 'Suspended',
        ],
        'info' => [
            'select_categories' => 'Select Categories',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'News Categories',
            'group' => 'Content',
        ],
        'field' => [
            'title' => 'Title',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Tags',
            'group' => 'Content',
        ],
        'field' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'weight' => 'Weight',
            'count' => 'Count',
        ],
    ],
];
