<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Ai_Prop
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Run the function on theme activation.
add_action( 'after_switch_theme', 'ai_prop_create_home_page' );
function ai_prop_create_home_page() {
	// Check if the home page already exists.
	$home_page = get_page_by_title( 'Home' );

	// If the page doesn't exist, create it.
	if ( ! $home_page ) {
		$home_page_id = wp_insert_post(
			array(
				'post_title'   => 'Home',
				'post_content' => '',
				'post_status'  => 'publish',
				'post_type'    => 'page',
			)
		);

		// Set the newly created page as the front page.
		if ( ! is_wp_error( $home_page_id ) ) {
			update_option( 'page_on_front', $home_page_id ); // Set as the front page.
			update_option( 'show_on_front', 'page' ); // Ensure front page displays a static page.
		}
	}

    // Set permalink structure to "Post name"
    if ( get_option( 'permalink_structure' ) !== '/%postname%/' ) {
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure( '/%postname%/' );
        $wp_rewrite->flush_rules();
    }
}

// Customize the checkout fields
add_filter( 'woocommerce_checkout_fields', 'ai_prop_checkout_fields' );
function ai_prop_checkout_fields( $fields ) {
	// Remove the billing company field
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_address_2'] );
	unset( $fields['order']['order_comments'] );
	unset( $fields['shipping']['shipping_first_name'] );
	unset( $fields['shipping']['shipping_last_name'] );
	unset( $fields['shipping']['shipping_company'] );
	unset( $fields['shipping']['shipping_country'] );
	unset( $fields['shipping']['shipping_address_1'] );
	unset( $fields['shipping']['shipping_address_2'] );
	unset( $fields['shipping']['shipping_city'] );
	unset( $fields['shipping']['shipping_state'] );
	unset( $fields['shipping']['shipping_postcode'] );

	// Adjust email position after first and last name
	$fields['billing']['billing_email']['priority'] = 25;  // Default priority for email is 30, setting it to 25 moves it up.

	return $fields;
}

// Restrict the cart to a single product
add_filter( 'woocommerce_add_cart_item_data', 'ai_prop_restrict_cart_to_single_product', 10, 2 );
function ai_prop_restrict_cart_to_single_product( $cart_item_data, $product_id ) {
	// Get the current cart instance
	$cart = WC()->cart;

	// Clear the cart if it contains any products
	if ( ! empty( $cart->get_cart() ) ) {
		$cart->empty_cart();
	}

	return $cart_item_data;
}

add_action( 'template_redirect', 'check_login_and_redirect' );

function check_login_and_redirect() {
	if ( ! is_user_logged_in() ) {
		$current_page = get_current_page_type();

		// List of restricted pages/post types
		$restricted_pages = array(
			'shop',
			'cart',			
			'product',
		);

		if ( in_array( $current_page, $restricted_pages ) ) {
			wp_redirect( home_url( ) );
			exit;
		}
	}
}

function get_current_page_type() {
	global $post;

	if ( is_shop() ) {
		return 'shop';
	}
	if ( is_cart() ) {
		return 'cart';
	}
	if ( is_front_page() ) {
		return 'home';
	}
	if ( is_account_page() ) {
		return 'account';
	}
	if ( is_product() ) {
		return 'product';
	}

	return '';
}

add_filter(
	'woocommerce_add_to_cart_redirect',
	function ( $url, $adding_to_cart ) {
		return wc_get_checkout_url();
	},
	10,
	2
);

add_action(
	'template_redirect',
	function () {
		if ( is_singular( 'product' ) ) {
			// The external URL to redirect to
			$external_url = home_url( );

			// Perform the redirect
			wp_redirect( $external_url );
			exit;
		}
	}
);