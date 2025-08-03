<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'ព័ត៌មាន',
            'group' => 'មាតិកា',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'ព័ត៌មាន',
        ],
        'nav' => [
            'label' => 'បញ្ជីព័ត៌មាន',
            'group' => '',
        ],
        'field' => [
            'content' => 'មាតិកា',
            'title' => 'ចំណងជើង',
            'taxonomy' => 'ប្រភេទ',
            'categories' => 'ប្រភេទ',
            'tags' => 'ស្លាក',
            'featured_image' => 'រូបភាពពិសេស',
            'seo' => 'SEO',
            'meta' => 'មេតា',
            'slug' => 'Slug',
            'summary' => 'សង្ខេប',
            'weight' => 'ទម្ងន់',
            'status' => 'ស្ថានភាព',
            'created_at' => 'ថ្ងៃបង្កើត',
            'status_published' => 'បានបោះពុម្ពផ្សាយ',
            'status_draft' => 'សេចក្តីព្រាង',
            'external_link' => 'តំណភ្ជាប់ខាងក្រៅ',
        ],
        'info' => [
            'select_categories' => 'ជ្រើសប្រភេទ',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'ប្រភេទព័ត៌មាន',
        ],
        'nav' => [
            'label' => 'ប្រភេទព័ត៌មាន',
            'group' => '',
        ],
        'field' => [
            'title' => 'ចំណងជើង',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'ស្លាកព័ត៌មាន',
        ],
        'nav' => [
            'label' => 'ស្លាកព័ត៌មាន',
            'group' => '',
        ],
        'field' => [
            'name' => 'ឈ្មោះ',
            'slug' => 'Slug',
            'weight' => 'ទម្ងន់',
            'count' => 'ចំនួន',
        ],
    ],
];
