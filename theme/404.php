<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ai_Prop
 */

get_header();
?>

<section id="primary" class="relative flex align-center justify-center min-h-screen bg-black text-white">
    <main id="main" class="flex items-center justify-center bg-ai-bg bg-cover bg-center bg-no-repeat will-change-auto">

        <div class="flex flex-col items-center justify-evenly text-center max-w-3xl mx-auto px-4 py-8">
            <header class="page-header">
                <h1 class="page-title text-white text-center"><?php esc_html_e( 'Page Not Found', 'ai-prop' ); ?></h1>
            </header><!-- .page-header -->

            <div class="flex flex-col items-center text-center">
                <p class="text-white/50 text-center">
                    <?php esc_html_e( 'This page could not be found. It might have been removed or renamed, or it may never have existed.', 'ai-prop' ); ?>
                </p>
            </div><!-- .page-content -->

            <div class="mt-10 flex items-center justify-center space-x-4">
                <a href="<?php echo esc_url( site_url( '/' ) ); ?>"
                    class="flex items-center justify-between whitespace-nowrap text-lg rounded-lg bg-gradient-to-r from-green-400 -from-28% to-blue-900 to-127% px-6 py-2 hover:drop-shadow-ai-green transition duration-300 ease-in-out no-underline text-white">
                    <?php esc_html_e( 'Home &raquo;', 'ai_prop' ); ?>
                </a>
            </div>
        </div>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();