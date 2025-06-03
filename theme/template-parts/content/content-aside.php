<?php
/**
 * Template part for displaying header for mobile screens
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ai_Prop
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>
<!-- Sidebar - occupies 1/5 of the width on large screens -->

<aside class="relative z-50 w-full flex-shrink-0">
    <div class="flex h-full flex-col">
        <!-- Sidebar Navigation -->
        <nav id="sidebar" class="flex-grow">
            <ul class="mt-10 space-y-4 p-4 text-lg font-semibold">
                <li>
                    <h5 class="text-xs font-normal uppercase text-gray-500">
                        <?php esc_html_e( 'Menu', 'ai_prop' ); ?>
                    </h5>
                </li>
                <!-- Dashboard Link -->
                <li class="rounded-lg">
                    <a href="<?php echo esc_url( site_url( '/' ) ); ?>"
                        class="menu-link flex items-center rounded-lg p-2 hover:bg-gray-600 hover:text-ai-green">
                        <span class="ml-4"><?php esc_html_e( 'Home', 'ai' ); ?></span>
                    </a>
                </li>
                <li class="rounded-lg">
                    <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                        class="menu-link flex items-center rounded-lg p-2 hover:bg-gray-600 hover:text-ai-green">
                        <span class="ml-4"><?php esc_html_e( 'Pricing', 'ai_prop' ); ?></span>
                    </a>
                </li>
                <li class="rounded-lg">
                    <a href="<?php echo is_front_page() ? '#faq' : esc_url( site_url( '/' ) ) . '#faq'; ?>"
                        class="menu-link flex items-center rounded-lg p-2 hover:bg-gray-600 hover:text-ai-green">
                        <span class="ml-4"><?php esc_html_e( 'FAQs', 'ai_prop' ); ?></span>
                    </a>
                </li>
                <li class="rounded-lg">
                    <a href="https://dashboard.aiprop.com"
                        class="rounded-lg border border-mf-muted-blue bg-mf-muted-blue px-6 py-1.5 text-white hover:shadow-custom-light">
                        <span class=""><?php esc_html_e( 'Login', 'ai_prop' ); ?></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>