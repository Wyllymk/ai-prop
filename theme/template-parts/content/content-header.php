<?php
/**
 * Template part for displaying header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ai_Prop
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<header class="sticky inset-x-0 top-10 z-50">
    <div class="mx-auto w-9/10 lg:3/4">
        <div class="relative w-full p-1 rounded-xl border border-ai-gray-2/20 bg-black backdrop-blur-lg shadow-md">
            <!-- Gradient border (top only) -->
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#3AD590] to-transparent">
            </div>
            <nav class="w-full flex items-center justify-between rounded-lg bg-ai-dark-green p-2 space-x-4">
                <div class="flex items-center justify-start">
                    <a href="<?php echo esc_url( site_url( '/' ) ); ?>"
                        class="flex items-center justify-center text-nowrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"
                            class="h-6 md:h-8 lg:h-8">
                    </a>
                </div>
                <div
                    class="flex flex-grow flex-row-reverse items-center space-x-4 justify-start md:flex-row md:justify-between">

                    <div class="flex items-center">
                        <a href="http://dashboard.aiprop.com/"
                            class="whitespace-nowrap mr-4 text-xs md:hidden rounded-md bg-gradient-to-r from-ai-green to-blue-900 px-4 py-1 text-white hover:drop-shadow-ai-green transition duration-300 ease-in-out">
                            <?php esc_html_e( 'Get Funded Now', 'ai_prop' ); ?>
                        </a>
                        <button id="menuButton" class="md:hidden">
                            <svg class="size-8 fill-gray-100 " xmlns="http://www.w3.org/2000/svg" width="200"
                                height="200" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M9 19h10v-2H9v2zm0-6h6v-2H9v2zm0-8v2h12V5H9zm-4-.5a1.5 1.5 0 1 0 .001 3.001A1.5 1.5 0 0 0 5 4.5zm0 6a1.5 1.5 0 1 0 .001 3.001A1.5 1.5 0 0 0 5 10.5zm0 6a1.5 1.5 0 1 0 .001 3.001A1.5 1.5 0 0 0 5 16.5z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Navigation Links -->
                    <div id="navLinks" class="hidden space-x-6 md:flex mx-auto py-2 px-4 duration-300 ease-in-out">
                        <a href="<?php echo is_front_page() ? '#home' : esc_url( site_url( '/' ) ); ?>"
                            class="whitespace-nowrap md:text-sm lg:text-base nav-link group relative text-white hover:text-ai-green transition-all duration-300">
                            <?php esc_html_e( 'Home', 'ai_prop' ); ?>
                            <span
                                class="absolute inset-x-0 bottom-0 h-0.5 scale-x-0 bg-ai-green transition-all duration-300 group-hover:scale-x-100">
                            </span>
                        </a>
                        <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                            class="whitespace-nowrap md:text-sm lg:text-base nav-link group relative text-white hover:text-ai-green transition-all duration-300">
                            <?php esc_html_e( 'Pricing', 'ai_prop' ); ?>
                            <span
                                class="absolute inset-x-0 bottom-0 h-0.5 scale-x-0 bg-ai-green transition-all duration-300 group-hover:scale-x-100"></span>
                        </a>
                        <a href="<?php echo is_front_page() ? '#faq' : esc_url( site_url( '/' ) ) . '#faq'; ?>"
                            class="whitespace-nowrap md:text-sm lg:text-base nav-link group relative text-white hover:text-ai-green transition-all duration-300">
                            <?php esc_html_e( 'FAQs', 'ai_prop' ); ?>
                            <span
                                class="absolute inset-x-0 bottom-0 h-0.5 scale-x-0 bg-ai-green transition-all duration-300 group-hover:scale-x-100"></span>
                        </a>
                    </div>

                    <!-- Buttons Group -->
                    <div class="flex items-center space-x-4">
                        <!-- Button component -->
                        <a href="https://dashboard.aiprop.com/"
                            class="hidden rounded-lg text-xs lg:text-lg border border-ai-gray-2/20 bg-transparent hover:shadow-white px-4 py-1 text-white md:block transition duration-300 ease-in-out">
                            <?php esc_html_e( 'Login', 'ai_prop' ); ?>
                        </a>
                        <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                            class="mr-4 hidden whitespace-nowrap text-xs lg:text-lg rounded-lg bg-gradient-to-r from-green-400 -from-28% to-blue-900 to-127% px-4 py-1 text-white hover:drop-shadow-ai-green lg:block transition duration-300 ease-in-out">
                            <?php esc_html_e( 'Get Funded Now', 'ai_prop' ); ?>
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