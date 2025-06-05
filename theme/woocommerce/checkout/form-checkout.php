<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<!-- Header Section -->
<header class="sticky inset-x-0 top-10 z-100">
    <div class="mx-auto w-9/10 lg:3/4">
        <div class="relative w-full p-1 rounded-xl border border-ai-gray-2/20 bg-black backdrop-blur-lg shadow-md">
            <!-- Gradient border (top only) -->
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#3AD590] to-transparent">
            </div>
            <nav class="w-full flex items-center justify-between rounded-lg bg-ai-dark-green px-2 space-x-4">
                <div class="flex items-center justify-start">
                    <a href="<?php echo esc_url( site_url( '/' ) ); ?>"
                        class="flex items-center justify-center text-nowrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"
                            class="!h-8 lg:!h-8 !my-2">
                    </a>
                </div>
                <div class="flex items-center justify-between">

                    <!-- Buttons Group -->
                    <div class="flex items-center justify-end">
                        <!-- Button component -->
                        <a href="https://dashboard.aiprop.com/"
                            class="no-underline rounded-lg text-xs lg:text-lg border border-ai-gray-2/20 bg-transparent hover:shadow-white px-4 py-2 !text-white transition duration-300 ease-in-out">
                            <?php esc_html_e( 'Login', 'ai_prop' ); ?>
                        </a>
                    </div>

                </div>
            </nav>
            <!-- Gradient border (bottom only) -->
            <div
                class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-[#3AD590] to-transparent">
            </div>

        </div>
    </div>
</header>
<!-- Form Section -->
<div class="relative mx-auto mt-5 max-w-sm md:max-w-6xl">
    <!-- Header Section -->
    <div class="relative items-start justify-start text-white flex flex-col space-y-4 z-20">
        <!-- Go Back Section -->
        <a id="prev_button" class="flex items-center no-underline" href="javascript:void(0)">
            <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/chevron-left.png"
                alt="back" class="!my-0 size-5 sm:mr-2">
            <span class="text-white no-underline hover:text-gray-800">
                <?php esc_html_e( 'Go Back', 'ai_prop' ); ?>
            </span>
        </a>
        <h1 class="font-bold text-white !my-0">
            <?php esc_html_e( 'Checkout', 'ai_prop' ); ?>
        </h1>
    </div>

    <!-- Checkout Section -->
    <form name="checkout" method="post" class="relative checkout woocommerce-checkout z-20"
        action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data"
        aria-label="<?php echo esc_attr__( 'Checkout', 'woocommerce' ); ?>">

        <?php if ( $checkout->get_checkout_fields() ) : ?>

        <div id="coupon_display"></div>
        <!-- Customer Details -->
        <div id="customer_details" class="first-column">
            <!-- <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?> -->
            <?php do_action( 'woocommerce_checkout_billing' ); ?>
        </div>

        <!-- Coupon Details -->
        <div id="coupon_details" class="second-column text-white">
            <div
                class="mb-2 p-3 flex w-full flex-col flex-nowrap lg:mb-4 rounded-xl border border-white/5 bg-linear-(--my-gradient) bg-ai-green-2">
                <h3 class="text-white">
                    <?php esc_html_e( 'Apply Coupon Code', 'ai_prop' ); ?>
                </h3>
                <p class="">
                    <?php esc_html_e( 'If you have a coupon code, please apply it below', 'ai_prop' ); ?>
                </p>
                <div class="flex-1">
                    <!-- Coupon Code Input -->
                    <div id="coupon_div" class="w-full flex flex-col items-center space-y-2">
                        <input type="text" id="custom_coupon_code" name="coupon_code" placeholder="Coupon Code"
                            class="w-full rounded-lg border border-white/5 bg-[#0A1B29] text-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-ai-green placeholder-gray-400" />
                        <button type="button" id="apply_coupon_button"
                            class="w-full rounded-lg bg-gradient-to-r from-[#3AD590] -from-27.77% via-[#1D807C] via-79.83% to-[#05386B] to-170.07% hover:shadow-[0_3px_35px_0_rgba(58,213,144,0.50)] text-white px-5 py-3 border-none cursor-pointer transition-all hover:opacity-90 hover:-translate-y-0.5">
                            <?php esc_html_e( 'Apply Coupon Code', 'ai_prop' ); ?>
                        </button>

                    </div>
                </div>
            </div>

            <!-- Payment Details -->
            <div id="payment_details"
                class="p-3 mb-5 rounded-xl border border-white/5 bg-linear-(--my-gradient) bg-ai-green-2">
                <h3 id="order_review_heading" class="rounded-lg font-bold !text-white">
                    <?php esc_html_e( 'Your Order Summary', 'ai_prop' ); ?>
                </h3>

                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>

                <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

            </div>

            <!-- Payment Gateways -->
            <div id="payment_gateways"
                class="p-3 rounded-xl border border-white/5 bg-linear-(--my-gradient) bg-ai-green-2">
                <h3 id="order_review_heading" class="rounded-lg font-bold !text-white">
                    <?php esc_html_e( 'Payment Details', 'ai_prop' ); ?>
                </h3>

                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>

                <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

            </div>
        </div>

        <?php endif; ?>

    </form>
    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

    <div class="absolute -bottom-10 z-10">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-circle.png" alt=""
            class="w-full h-full object-contain">
        <!-- Bottom inner shadow -->
        <div
            class="absolute inset-x-0 bottom-0 h-5 bg-[linear-gradient(to_top,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
        </div>
        <!-- Top inner shadow -->
        <div
            class="absolute inset-x-0 top-0 h-5 bg-[linear-gradient(to_bottom,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
        </div>
        <!-- Left inner shadow -->
        <div
            class="absolute inset-y-0 left-0 h-full w-10 bg-[linear-gradient(to_right,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
        </div>
        <!-- Right inner shadow -->
        <div
            class="absolute inset-y-0 right-0 h-full w-5 bg-[linear-gradient(to_left,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
        </div>
    </div>

</div>

<!-- Footer Section -->
<footer class="relative z-20 flex w-full flex-col py-4 text-center">

    <div
        class="flex w-full md:w-11/12 mx-auto flex-col items-center justify-between space-y-4 py-2 lg:flex-row lg:space-y-0">
        <div
            class="w-full flex flex-col space-y-2 mb-5 mb:mb-0 items-center justify-center md:justify-start md:items-start">
            <a href="<?php echo esc_url( site_url( '/' ) ); ?>" class="flex items-center justify-center text-nowrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"
                    class="h-12 !my-0">
            </a>
            <div class="flex justify-center gap-2">
                <p class="!text-white/75 text-sm w-50 text-start">
                    <?php esc_html_e( 'The Sotheby building, Rodney village, Rodney bay, Gros-Islet, Saint Lucia', 'ai_prop' ); ?>
                </p>
            </div>
        </div>
        <div class="w-full flex space-x-6 items-center justify-evenly md:justify-end">
            <div class="flex flex-col space-y-2 text-start">
                <h6 class="text-white">
                    <?php esc_html_e( 'Platform', 'ai_prop' ); ?>
                </h6>
                <a href="<?php echo is_front_page() ? '#home' : esc_url( site_url( '/' ) ); ?>"
                    class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform no-underline">
                    <?php esc_html_e( 'Home', 'ai_prop' ); ?>
                </a>
                <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                    class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform no-underline">
                    <?php esc_html_e( 'Pricing', 'ai_prop' ); ?>
                </a>
                <a href="<?php echo is_front_page() ? '#faq' : esc_url( site_url( '/' ) ) . '#faq'; ?>"
                    class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform no-underline">
                    <?php esc_html_e( 'FAQs', 'ai_prop' ); ?>
                </a>

            </div>
            <div class="flex flex-col space-y-2 text-start">
                <h6 class="text-white">
                    <?php esc_html_e( 'Join the Community', 'ai_prop' ); ?>
                </h6>
                <a href="https://x.com/AipropCom"
                    class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform no-underline">
                    <?php esc_html_e( 'X / Twitter', 'ai_prop' ); ?>
                </a>
                <a href="#"
                    class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform no-underline">
                    <?php esc_html_e( 'Instagram', 'ai_prop' ); ?>
                </a>
                <a href="#"
                    class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform no-underline">
                    <?php esc_html_e( 'Discord', 'ai_prop' ); ?>
                </a>
            </div>
        </div>
    </div>

    <!-- Horizontal Divider -->
    <div
        class="my-4 w-11/12 mx-auto flex h-px self-center bg-gradient-to-r from-transparent via-[#3AD590] to-transparent">
    </div>

    <div class="flex w-11/12 mx-auto flex-col items-center py-2 space-y-2">
        <h5 class="text-base text-white/80">
            <?php 
            $current_year = date('Y');
            
            esc_html_e(sprintf('© %d AI Prop. All Rights Reserved.', $current_year), 'ai_prop');
            
            ?>
        </h5>
    </div>

</footer>

<?php
get_footer();