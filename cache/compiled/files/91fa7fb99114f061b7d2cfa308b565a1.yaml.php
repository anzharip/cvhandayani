<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-skeleton-gateway-site/user/plugins/archives/archives.yaml',
    'modified' => 1526374848,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'date_display_format' => 'F Y',
        'show_count' => true,
        'limit' => 12,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filter_combinator' => 'and',
        'filters' => [
            'category' => 'blog'
        ],
        'taxonomy_names' => [
            'month' => 'archives_month',
            'year' => 'archives_year'
        ]
    ]
];
