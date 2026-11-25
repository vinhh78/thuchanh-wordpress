<?php
function mytheme_setup() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_setup');

function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
add_filter('woocommerce_product_single_add_to_cart_text', 'custom_cart_button_text');
add_filter('woocommerce_product_add_to_cart_text', 'custom_cart_button_text');
function custom_cart_button_text() {
    return 'Mua ngay';
}

add_filter('woocommerce_checkout_fields', 'custom_checkout_fields');
function custom_checkout_fields($fields) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_address_2']);
    return $fields;
}
