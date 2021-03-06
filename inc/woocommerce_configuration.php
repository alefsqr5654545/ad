<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

if ( ! function_exists( 'crypterio_shop_loop_item_author' ) ) {
	function crypterio_shop_loop_item_author() {
		$html = '<div class="author">' . esc_html__( 'by', 'crypterio' ) . ' ' . get_the_author() . '</div>';
		echo crypterio_sanitize_text_field($html);
	}
}

add_action( 'woocommerce_shop_loop_item_title', 'crypterio_shop_loop_item_author', 10 );

if ( ! function_exists( 'crypterio_before_shop_loop_wr_start' ) ) {
	function crypterio_before_shop_loop_wr_start() {
		$html = '<div class="woocommerce_before_shop_loop">';
		echo crypterio_sanitize_text_field($html);
	}
}

add_action( 'woocommerce_before_shop_loop', 'crypterio_before_shop_loop_wr_start', 15 );

if ( ! function_exists( 'crypterio_before_shop_loop_wr_end' ) ) {
	function crypterio_before_shop_loop_wr_end() {
		$html = '</div>';
		echo crypterio_sanitize_text_field($html);
	}
}

add_action( 'woocommerce_before_shop_loop', 'crypterio_before_shop_loop_wr_end', 40 );

add_filter( 'woocommerce_show_page_title', '__return_false' );
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );
add_filter( 'loop_shop_per_page', function ($cols){
	return get_theme_mod( 'shop_products_per_page', 9 );
} , 20 );
add_filter( 'loop_shop_columns', 'crypterio_products_loop_columns' );

if ( ! function_exists( 'crypterio_products_loop_columns' ) ) {
	function crypterio_products_loop_columns() {
		return 3;
	}
}

add_filter( 'woocommerce_output_related_products_args', 'crypterio_related_products_args' );

function crypterio_related_products_args( $args ) {
	$args['posts_per_page'] = 3;
	$args['columns']        = 3;

	return $args;
}

add_action( 'after_setup_theme', 'stm_woo_setup' );

function stm_woo_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
}