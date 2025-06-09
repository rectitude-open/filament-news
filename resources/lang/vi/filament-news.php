<?php

return [
    'news' => [
        'nav' => [
            'label' => 'Tin tức',
            'group' => 'Nội dung',
        ],
        'field' => [
            'content' => 'Nội dung',
            'title' => 'Tiêu đề',
            'taxonomy' => 'Phân loại',
            'categories' => 'Danh mục',
            'tags' => 'Thẻ',
            'featured_image' => 'Ảnh nổi bật',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'summary' => 'Tóm tắt',
            'weight' => 'Trọng số',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'status_active' => 'Hoạt động',
            'status_suspended' => 'Tạm ngưng',
        ],
        'info' => [
            'select_categories' => 'Chọn danh mục',
        ],
    ],
    'news_category' => [
        'nav' => [
            'label' => 'Danh mục tin tức',
            'group' => 'Nội dung',
        ],
        'field' => [
            'title' => 'Tiêu đề',
        ],
    ],
    'tag' => [
        'nav' => [
            'label' => 'Thẻ',
            'group' => 'Nội dung',
        ],
        'field' => [
            'name' => 'Tên',
            'slug' => 'Slug',
            'weight' => 'Trọng số',
            'count' => 'Số lượng',
        ],
    ],
];
