<?php
function tbthemes_demo_import_get_current_theme_author(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Author');
}
function tbthemes_plugin_check_activated(){
    $pluginList = get_option( 'active_plugins' );
    $tbthemes_plugin = 'advanced-import/advanced-import.php'; 
    $checkPlugin = in_array( $tbthemes_plugin , $pluginList );
    return $checkPlugin;
}
function tbthemes_plugin_file_exists(){
    $tbthemes_plugin = 'advanced-import/advanced-import.php'; 
    $pathpluginurl = WP_PLUGIN_DIR .'/'. $tbthemes_plugin;
    $isinstalled = file_exists( $pathpluginurl );
    return $isinstalled;
}
function tbthemes_demo_import_get_current_theme_slug(){
    $current_theme = wp_get_theme();
    return $current_theme->stylesheet;
}
function tbthemes_demo_import_get_theme_screenshot(){
    $current_theme = wp_get_theme();
    return $current_theme->get_screenshot();
}
function tbthemes_demo_import_get_theme_name(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Name');
}

function tbthemes_demo_import_get_templates_lists( $theme_slug ){
    switch ( $theme_slug ):    
        case "lifestyle-magazine":
        case "lifestyle-magazine-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/lifestyle-magazine.php';
        break;

        case "bootstrap-photography":
        case "bootstrap-photography-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/bootstrap-photography.php';
        break;

        case "chic-lifestyle":
        case "chic-lifestyle-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/chic-lifestyle.php';
        break;

        case "magazine-newspaper":
        case "magazine-newspaper-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/magazine-newspaper.php';
        break;

        case "bootstrap-blog":
        case "bootstrap-blog-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/bootstrap-blog.php';
        break;

        case "travel-tour":
        case "travel-tour-premium":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/travel-tour.php';
        break;

        case "travel-agency-booking":
        case "travel-agency-booking-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/travel-agency-booking.php';
        break;

        case "relax-spa":
        case "relax-spa-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/relax-spa.php';
        break;

        case "bootstrap-coach":
        case "bootstrap-coach-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/bootstrap-coach.php';
        break;

        case "bootstrap-fitness":
        case "bootstrap-fitness-pro":
            require_once TBTHEMES_DEMO_IMPORT_PATH . 'admin/templates/bootstrap-fitness.php';
        break;
        

        default:
            $demo_templates_lists = array();
    endswitch;

    return $demo_templates_lists;

}