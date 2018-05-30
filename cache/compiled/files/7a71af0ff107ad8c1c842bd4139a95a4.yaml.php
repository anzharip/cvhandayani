<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-skeleton-gateway-site/user/config/site.yaml',
    'modified' => 1527513497,
    'data' => [
        'title' => 'CV Dwi Putri Handayani',
        'default_lang' => 'id',
        'author' => [
            'name' => 'John Appleseed',
            'email' => 'john@email.com',
            'copyright' => 'Copyright 2013 Gateway. All Rights Reserved.'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'featured'
        ],
        'metadata' => [
            'description' => 'CV Dwi Putri  Handayani'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'logo' => 'logo.png',
        'header' => [
            'title' => 'CV Dwi Putri Handayani',
            'background' => 'background.jpg'
        ],
        'social' => [
            0 => [
                'url' => 'https://twitter.com/getgrav',
                'icon' => 'twitter'
            ],
            1 => [
                'url' => '#',
                'icon' => 'facebook'
            ],
            2 => [
                'url' => 'http://www.vimeo.com',
                'icon' => 'vimeo-square'
            ],
            3 => [
                'url' => 'http://www.pinterest.com',
                'icon' => 'pinterest'
            ]
        ],
        'footer' => [
            'widget' => [
                'title' => 'CV Dwi Putri Handayani',
                'description' => 'CV Dwi Putri Handayani <br> Office: Jl. Mayjend Sutoyo No. 27, Yogyakarta <br> Factory: Ngawen, Nglipar, Gunung Kidul, DIY. <br> Email: sales@dph.com',
                'link' => NULL
            ]
        ],
        'copyright' => 'Copyright © 2075 <a href="http://rescuethemes.com/">Rescue Themes</a>. All Rights Reserved. Converted by <a href="http://www.getgrav.org">Grav Team</a>'
    ]
];
