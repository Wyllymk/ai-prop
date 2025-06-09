<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="max-h-screen">
    <!-- Header Section -->
    <header class="sticky inset-x-0 top-10 z-100">
        <div class="mx-auto w-9/10 lg:3/4">
            <div class="relative w-full p-1 rounded-xl border border-ai-gray-2/20 bg-black backdrop-blur-lg shadow-md">
                <!-- Gradient border (top only) -->
                <div
                    class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#3AD590] to-transparent">
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
                                class="!no-underline rounded-lg text-xs lg:text-lg border border-ai-gray-2/20 bg-transparent shadow-sm hover:!shadow-white px-4 py-2 !text-white transition duration-300 ease-in-out">
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
    <div class="mx-auto mt-20 mb-10 flex max-w-sm flex-col items-center justify-center md:max-w-5xl">

        <?php
		if ( $order ) :

			do_action( 'woocommerce_before_thankyou', $order->get_id() );
			?>

        <?php if ( $order->has_status( 'failed' ) ) : ?>

        <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed z-20">
            <?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?>
        </p>

        <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions z-20">
            <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>"
                class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
            <?php if ( is_user_logged_in() ) : ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"
                class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
            <?php endif; ?>
        </p>

        <?php else : ?>

        <div class="align-center flex flex-col items-center justify-center z-20">
            <h1 class="mt-20 text-center text-white">
                <span class="font-light">
                    <?php esc_html_e( 'Your order ', 'ai_prop' ); ?>
                </span>
                <span class="font-light text-ai-green">
                    <?php esc_html_e( '#', 'ai_prop' ); ?><?php echo $order->get_order_number(); ?><br>
                </span>
                <?php esc_html_e( 'has been successfully placed!', 'ai_prop' ); ?>
            </h1>
            <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/tick.svg" alt="tick"
                class="my-0 size-40 sm:mr-2">

        </div>

        <?php endif; ?>

        <?php else : ?>

        <?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>

        <?php endif; ?>

        <div class="absolute bottom-0 z-10">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-circle.png" alt=""
                class="w-full h-full object-contain">
            <!-- Bottom inner shadow -->
            <div
                class="absolute inset-x-0 bottom-0 h-20 bg-[linear-gradient(to_top,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
            </div>
            <!-- Top inner shadow -->
            <div
                class="absolute inset-x-0 top-0 h-20 bg-[linear-gradient(to_bottom,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
            </div>
            <!-- Left inner shadow -->
            <div
                class="absolute inset-y-0 left-0 h-full w-15 bg-[linear-gradient(to_right,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
            </div>
            <!-- Right inner shadow -->
            <div
                class="absolute inset-y-0 right-0 h-full w-15 bg-[linear-gradient(to_left,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
            </div>
        </div>

    </div>
    <!-- Footer Section -->
    <footer class="relative z-20 flex w-full flex-col text-center">

        <div
            class="flex w-full md:w-11/12 mx-auto flex-col items-center justify-between space-y-4 py-2 lg:flex-row lg:space-y-0">
            <div
                class="w-full flex flex-col space-y-2 mb-5 mb:mb-0 items-center justify-center md:justify-start md:items-start">
                <a href="<?php echo esc_url( site_url( '/' ) ); ?>"
                    class="flex items-center justify-center text-nowrap">
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
                        class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform !no-underline">
                        <?php esc_html_e( 'Home', 'ai_prop' ); ?>
                    </a>
                    <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                        class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform !no-underline">
                        <?php esc_html_e( 'Pricing', 'ai_prop' ); ?>
                    </a>
                    <a href="<?php echo is_front_page() ? '#faq' : esc_url( site_url( '/' ) ) . '#faq'; ?>"
                        class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform !no-underline">
                        <?php esc_html_e( 'FAQs', 'ai_prop' ); ?>
                    </a>

                </div>
                <div class="flex flex-col space-y-2 text-start">
                    <h6 class="text-white">
                        <?php esc_html_e( 'Join the Community', 'ai_prop' ); ?>
                    </h6>
                    <a href="https://x.com/AipropCom" target="_blank"
                        class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform !no-underline">
                        <?php esc_html_e( 'X / Twitter', 'ai_prop' ); ?>
                    </a>
                    <a href="#" target="_blank"
                        class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform !no-underline">
                        <?php esc_html_e( 'Instagram', 'ai_prop' ); ?>
                    </a>
                    <a href="#" target="_blank"
                        class="!text-white/75 text-sm hover:!text-ai-green hover:translate-x-1 transition-transform !no-underline">
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
</div>