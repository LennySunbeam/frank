<?php



function load_stylesheets()
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/styles/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function load_javascript()
{

    wp_register_script('custom', get_template_directory_uri() . '/js/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Buy Frank\'s Clothes', 'woocommerce' ); 
}


// Disable Woocommerce stylesheet

add_filter( 'woocommerce_enqueue_styles', '__return_false' );


// Remove Product Description

add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );
function remove_product_description_heading() {
  return '';
}

// Remove Added to cart message

add_filter( 'wc_add_to_cart_message_html', '__return_false' );


// Change size select message

add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'cinchws_filter_dropdown_args', 10 );

function cinchws_filter_dropdown_args( $args ) {
    $args['show_option_none'] = 'Size';
    return $args;
}

/** 
 * remove on single product panel 'Additional Information' since it already says it on tab.
 */
add_filter('woocommerce_product_additional_information_heading', 'isa_product_additional_information_heading');
 
function isa_product_additional_information_heading() {
    echo '';
}

/**
* Remove related products output
*/
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


// Declare woocommerce support

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );