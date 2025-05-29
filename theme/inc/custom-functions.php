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

/**
 * Create essential pages upon theme activation.
 *
 * This function creates several essential pages
 * for the theme. The function checks if each page already exists based on the slug and
 * if it does not, the page is created and associated with the appropriate template.
 */
function ai_prop_create_pages() {
	// Pages to create
	$pages = array(
		array(
			'title'    => 'Payouts',
			'slug'     => 'payouts',
			'template' => 'page-templates/page-payouts.php',
        ),
        array(
			'title'    => 'How It Works',
			'slug'     => 'how-it-works',
			'template' => 'page-templates/page-how-it-works.php',
		),
        array(
			'title'    => 'Affiliate Programs',
			'slug'     => 'affiliate-programs',
			'template' => 'page-templates/page-affiliate-programs.php',
		),
		array(
			'title'    => 'Privacy Policy',
			'slug'     => 'privacy-policy',
			'template' => 'page-templates/page-privacy-policy.php',
		),
		array(
			'title'    => 'AML Policy',
			'slug'     => 'aml-policy',
			'template' => 'page-templates/page-aml-policy.php',
		),
		array(
			'title'    => 'Terms & Conditions',
			'slug'     => 'terms-conditions',
			'template' => 'page-templates/page-terms-conditions.php',
		),
		array(
			'title'    => 'Refund Policy',
			'slug'     => 'refund-policy',
			'template' => 'page-templates/page-refund-policy.php',
		)
	);

	// Loop through each page and create if it doesn't exist
	foreach ( $pages as $page ) {
		$page_exists = get_page_by_path( $page['slug'] );

		if ( ! $page_exists ) {
			$new_page = array(
				'post_title'   => $page['title'],
				'post_content' => '',
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_name'    => $page['slug'],
			);

			$page_id = wp_insert_post( $new_page );

			if ( $page_id && ! is_wp_error( $page_id ) ) {
				update_post_meta( $page_id, '_wp_page_template', $page['template'] );
			}
		}
	}
}

add_action( 'after_switch_theme', 'ai_prop_create_pages' );

// Customize the checkout fields
add_filter( 'woocommerce_checkout_fields', 'ai_prop_checkout_fields' );
function ai_prop_checkout_fields( $fields ) {
	// Remove the billing company field
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_phone'] );
	unset( $fields['billing']['billing_address_1'] );
	unset( $fields['billing']['billing_address_2'] );
	unset( $fields['billing']['billing_state'] );
	unset( $fields['billing']['billing_city'] );
	unset( $fields['billing']['billing_postcode'] );
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