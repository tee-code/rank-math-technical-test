<?php
$demo_templates_lists = array(

    'free-1' => array(
        'title' => __( 'Nature Photography', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'elementor',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Bootstrap Photography' ),  /*Search keyword*/
        'categories' => array( 'bootstrap-elements' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-1/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-1/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-1/widgets.json',
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-1/free-1.jpg',
        'demo_url' => 'https://thebootstrapthemes.com/preview/?demo=bootstrap-photography',
        'plugins' => array(
            array(
                'name'      => esc_html__( 'Elementor', 'tbthemes-demo-import' ),
                'slug'      => 'elementor',
            ),
        )
    ),

    'free-2' => array(
        'title' => __( 'Fashion Photography', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'elementor',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Bootstrap Photography' ),  /*Search keyword*/
        'categories' => array( 'bootstrap-elements' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-2/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-2/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-2/widgets.json',
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-2/free-2.jpg',
        'demo_url' => 'https://thebootstrapthemes.com/preview/?demo=fashion-photography',
        'plugins' => array(
            array(
                'name'      => esc_html__( 'Elementor', 'tbthemes-demo-import' ),
                'slug'      => 'elementor',
            ),
            array(
                'name'      => esc_html__( 'Svg Support', 'bootstrap-photography' ),
                'slug'      => 'svg-support',
            ),
        )
    ),

    'free-3' => array(
        'title' => __( 'Portfolio Photography', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'elementor',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Bootstrap Photography' ),  /*Search keyword*/
        'categories' => array( 'bootstrap-elements' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-3/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-3/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-3/widgets.json',
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-3/free-3.jpg',
        'demo_url' => 'https://thebootstrapthemes.com/preview/?demo=portfolio-photography',
        'plugins' => array(
            array(
                'name'      => esc_html__( 'Elementor', 'tbthemes-demo-import' ),
                'slug'      => 'elementor',
            ),
            array(
                'name'      => esc_html__( 'Svg Support', 'bootstrap-photography' ),
                'slug'      => 'svg-support',
            ),
        )
    ),

    'free-4' => array(
        'title' => __( 'The Moments', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'elementor',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Bootstrap Photography' ),  /*Search keyword*/
        'categories' => array( 'bootstrap-elements' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-4/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-4/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-4/widgets.json',
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/free-4/free-4.jpg',
        'demo_url' => 'https://thebootstrapthemes.com/previews/photography-free-5/',
        'plugins' => array(
            array(
                'name'      => esc_html__( 'Elementor', 'tbthemes-demo-import' ),
                'slug'      => 'elementor',
            ),
        )
    ),
    'pro-1' => array(
        'title' => __( 'Food Photography Pro', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => '',
        'type' => 'elementor',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Bootstrap Photography' ),  /*Search keyword*/
        'categories' => array( 'bootstrap-elements' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-1/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-1/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-1/widgets.json',
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-1/pro-1.jpg',
        'demo_url' => 'https://thebootstrapthemes.com/preview/?demo=food-photography',
        'plugins' => array(
            array(
                'name'      => esc_html__( 'Elementor', 'tbthemes-demo-import' ),
                'slug'      => 'elementor',
            ),
        )
    ),

    'pro-2' => array(
        'title' => __( 'Wedding Photography Pro', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => '',
        'type' => 'elementor',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Bootstrap Photography' ),  /*Search keyword*/
        'categories' => array( 'bootstrap-elements' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-2/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-2/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-2/widgets.json',
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-2/pro-2.jpg',
        'demo_url' => 'https://thebootstrapthemes.com/preview/?demo=wedding-photography',
        'plugins' => array(
            array(
                'name'      => esc_html__( 'Elementor', 'tbthemes-demo-import' ),
                'slug'      => 'elementor',
            ),
        )
    ),

    'pro-3' => array(
        'title' => __( 'Travel Photography Pro', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => '',
        'type' => 'elementor',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Bootstrap Photography' ),  /*Search keyword*/
        'categories' => array( 'bootstrap-elements' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-3/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-3/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-3/widgets.json',
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'/bootstrap-photography/pro-3/pro-3.jpg',
        'demo_url' => 'https://thebootstrapthemes.com/preview/?demo=travel-photography',
        'plugins' => array(
            array(
                'name'      => esc_html__( 'Elementor', 'tbthemes-demo-import' ),
                'slug'      => 'elementor',
            ),
        )
    ),

    
);