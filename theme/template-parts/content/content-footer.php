<?php
/**
 * Template part for displaying footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ai_Prop
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<!-- Footer - stays at the bottom if content doesn't span full height -->
<footer class="relative z-20 flex w-full flex-col py-4 text-center">

    <div
        class="flex w-full md:w-11/12 mx-auto flex-col items-center justify-between space-y-4 py-2 lg:flex-row lg:space-y-0">
        <div
            class="w-full flex flex-col space-y-2 mb-5 mb:mb-0 items-center justify-center md:justify-start md:items-start">
            <a href="<?php echo esc_url( site_url( '/' ) ); ?>" class="flex items-center justify-center text-nowrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo" class="h-12">
            </a>
            <div class="flex justify-center gap-2">
                <p class="text-white/75 text-sm w-50 text-start">
                    <?php esc_html_e( 'The Sotheby building, Rodney village, Rodney bay, Gros-Islet, Saint Lucia', 'ai_prop' ); ?>
                </p>
            </div>
        </div>
        <div class="w-full flex items-center justify-evenly md:justify-end space-x-6">
            <div class="flex flex-col space-y-2 text-start">
                <h6 class="text-white">
                    <?php esc_html_e( 'Platform', 'ai_prop' ); ?>
                </h6>
                <a href="<?php echo is_front_page() ? '#home' : esc_url( site_url( '/' ) ); ?>"
                    class="text-white/75 text-sm hover:text-ai-green hover:translate-x-1 transition-transform cursor-pointer">
                    <?php esc_html_e( 'Home', 'ai_prop' ); ?>
                </a>
                <a <?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>
                    class="text-white/75 text-sm hover:text-ai-green hover:translate-x-1 transition-transform cursor-pointer">
                    <?php esc_html_e( 'Pricing', 'ai_prop' ); ?>
                </a>
                <a <?php echo is_front_page() ? '#faq' : esc_url( site_url( '/' ) ) . '#faq'; ?>
                    class="text-white/75 text-sm hover:text-ai-green hover:translate-x-1 transition-transform cursor-pointer">
                    <?php esc_html_e( 'FAQs', 'ai_prop' ); ?>
                </a>

            </div>
            <div class="flex flex-col space-y-2 text-start">
                <h6 class="text-white">
                    <?php esc_html_e( 'Join the Community', 'ai_prop' ); ?>
                </h6>
                <a href="#"
                    class="text-white/75 text-sm hover:text-ai-green hover:translate-x-1 transition-transform cursor-pointer">
                    <?php esc_html_e( 'X / Twitter', 'ai_prop' ); ?>
                </a>
                <a href="#"
                    class="text-white/75 text-sm hover:text-ai-green hover:translate-x-1 transition-transform cursor-pointer">
                    <?php esc_html_e( 'Instagram', 'ai_prop' ); ?>
                </a>
                <a href="#"
                    class="text-white/75 text-sm hover:text-ai-green hover:translate-x-1 transition-transform cursor-pointer">
                    <?php esc_html_e( 'Discord', 'ai_prop' ); ?>
                </a>
            </div>
        </div>
    </div>

    <!-- Horizontal Divider -->
    <div
        class="my-4 w-11/12 mx-auto flex h-px self-center bg-gradient-to-r from-transparent via-ai-green to-transparent">
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