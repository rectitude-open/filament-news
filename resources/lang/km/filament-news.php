<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'ព័ត៌មាន',
            'group' => 'មាតិកា',
        ],
    ],
    'news' => [
        'nav' => [
            'label' => 'ពត៌មាន',
            'group' => '',
        ],
        'field' => [
            'content' => 'មាតិកា',
            'title' => 'ចំណងជើង',
            'taxonomy' => 'ចំណាត់ថ្នាក់',
            'categories' => 'ប្រភេទ',
            'tags' => 'ស្លាក',
            'featured_image' => 'រូបភាពពិសេស',
            'seo' => 'SEO',
            'meta' => 'មេតា',
            'slug' => 'ស្លាកសញ្ញា',
            'summary' => 'សង្ខេប',
            'weight' => 'ទំងន់',
            'status' => 'ស្ថានភាព',
            'created_at' => 'បង្កើតនៅ',
            'status_active' => 'សកម្ម',
            'status_suspended' => 'ផ្អាក',
        ],
        'info' => [
            'select_categories' => 'ជ្រើសប្រភេទ',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'ប្រភេទពត៌មាន',
            'group' => '',
        ],
        'field' => [
            'title' => 'ចំណងជើង',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'ស្លាក',
            'group' => '',
        ],
        'field' => [
            'name' => 'ឈ្មោះ',
            'slug' => 'ស្លាកសញ្ញា',
            'weight' => 'ទំងន់',
            'count' => 'ចំនួន',
        ],
    ],
];
