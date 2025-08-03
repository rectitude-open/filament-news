<?php

return [
    'cluster' => [
        'nav' => [
            'label' => 'Tin tức',
            'group' => 'Nội dung',
        ],
    ],
    'news' => [
        'resource' => [
            'label' => 'Tin tức',
        ],
        'nav' => [
            'label' => 'Danh sách tin tức',
            'group' => '',
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
            'status_published' => 'Đã xuất bản',
            'status_draft' => 'Bản nháp',
            'external_link' => 'Liên kết ngoài',
        ],
        'info' => [
            'select_categories' => 'Chọn danh mục',
        ],
    ],
    'news_category' => [
        'resource' => [
            'label' => 'Danh mục tin tức',
        ],
        'nav' => [
            'label' => 'Danh mục tin tức',
            'group' => '',
        ],
        'field' => [
            'title' => 'Tiêu đề',
        ],
    ],
    'tag' => [
        'resource' => [
            'label' => 'Thẻ tin tức',
        ],
        'nav' => [
            'label' => 'Thẻ tin tức',
            'group' => '',
        ],
        'field' => [
            'name' => 'Tên',
            'slug' => 'Slug',
            'weight' => 'Trọng số',
            'count' => 'Số lượng',
        ],
    ],
];
