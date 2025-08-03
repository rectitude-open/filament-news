<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'News',
            'group' => 'Content',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'News',
        ],
        'nav' => [
            'label' => 'News List',
            'group' => '',
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
            'status_published' => 'Published',
            'status_draft' => 'Draft',
            'external_link' => 'External Link',
        ],
        'info' => [
            'select_categories' => 'Select Categories',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'News Categories',
        ],
        'nav' => [
            'label' => 'News Categories',
            'group' => '',
        ],
        'field' => [
            'title' => 'Title',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'News Tags',
        ],
        'nav' => [
            'label' => 'News Tags',
            'group' => '',
        ],
        'field' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'weight' => 'Weight',
            'count' => 'Count',
        ],
    ],
];
