<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false,
            'titleBefore'  => false,
            'description'  => 'Platform jual beli tanah kavling murah, tanah kavling kredit, rumah, dan properti terbaik di Pontianak, Kubu Raya & sekitarnya. Booking online mudah & aman bersama Sajada Digital.', // Default description
            'separator'    => ' | ',
            'keywords'     => [
                'tanah kavling murah',
                'tanah kavling kredit',
                'tanah kavling pontianak',
                'jual tanah kavling',
                'kavling murah pontianak',
                'properti pontianak',
                'tanah murah pontianak',
                'kavling kredit murah',
                'beli tanah kavling',
                'investasi tanah kavling',
                'tanah kavling kubu raya',
                'sajada digital',
                'rumah murah pontianak',
                'properti murah',
                'booking tanah kavling online',
            ],
            'canonical'    => 'full',
            'robots'       => 'index, follow',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Sajada Digital - Tanah Kavling & Properti Terbaik',
            'description' => 'Platform jual beli tanah kavling murah, rumah, dan properti terbaik. Temukan properti impian Anda di Sajada Digital!',
            'url'         => null,
            'type'        => 'website',
            'site_name'   => 'Sajada Digital',
            'images'      => [
                'images' => [],
            ],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@sajadadigital',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Sajada Digital',
            'description' => 'Platform jual beli tanah kavling murah, rumah, dan properti terbaik di Pontianak & sekitarnya.',
            'url'         => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebSite',
            'images'      => [],
        ],
    ],
];
